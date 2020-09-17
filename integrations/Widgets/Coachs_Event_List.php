<?php

/**
 * Coachs.
 *
 * @author    Jakub Kułaga <kuba.kulaga.sv7@gmail.com>
 * @copyright 2020 Jakub Kułaga
 * @license   GPL 3.0+
 *
 * @see      https://github.com/4s3man
 */

namespace Coachs\Integrations\Widgets;

use Coachs\Internals\PostTypes;
use Timber\Helper;
use Timber\Post;
use Timber\Timber;
use WP_Post;

/**
 * Create custom widget class extending WPH_Widget.
 */
class Coachs_Event_List extends \WPH_Widget
{
    const START_DATE_ID = 'startDate';
    const END_DATE_ID = 'endDate';
    const TAG_ID = 'tagId';
    const TITLE = 'title';

    /**
     * Initialize the widget.
     *
     * @return void
     */
    public function __construct()
    {
        $args = [
            'label' => __('Coachs event list', C_TEXTDOMAIN),
            'description' => __('Not expiring event list', C_TEXTDOMAIN),
            'slug' => 'coachs-event-list',
            // 'options' => array( 'cache' => true )
        ];

        $args['fields'] = [
            // Title field
            [
                // Field name/label
                'name' => __('Title', C_TEXTDOMAIN),
                // Field description
                'desc' => __('Enter the widget title.', C_TEXTDOMAIN),
                // Field id
                'id' => self::TITLE,
                // Field type ( text, checkbox, textarea, select, select-group, taxonomy, taxonomyterm, pages, hidden )
                'type' => 'text',
                // Class, rows, cols
                'class' => 'widefat',
                'filter' => 'strip_tags|esc_attr',
            ],
            // Taxonomy Field
            [
                'name' => __('Tag', C_TEXTDOMAIN),
                'desc' => __('Events with this tags will be displayed', C_TEXTDOMAIN),
                'id' => self::TAG_ID,
                'type' => 'taxonomyterm',
                'taxonomy' => 'post_tag',
                'class' => 'widefat',
            ],
            [
                'name' => __('Start date', C_TEXTDOMAIN),
                'desc' => __('From when events should be displayed.', C_TEXTDOMAIN),
                'id' => self::START_DATE_ID,
                'type' => 'date',
                'class' => 'widefat',
            ],
            [
                'name' => __('EndDate', C_TEXTDOMAIN),
                'desc' => __('To which date events should be displayed.', C_TEXTDOMAIN),
                'id' => self::END_DATE_ID,
                'type' => 'date',
                'class' => 'widefat',
            ],
        ];

        $this->create_widget($args);
    }

    /**
     * Custom validation for this widget.
     *
     * @since 1.0.0
     *
     * @param string $value the text
     *
     * @return bool
     */
    public function my_custom_validation($value)
    {
        if (strlen($value) > 1) {
            return false;
        }

        return true;
    }

    /**
     * Output function.
     *
     * @since 1.0.0
     *
     * @param array $args     the argument shared to the output from WordPress
     * @param array $instance the settings saved
     *
     * @return void
     */
    public function widget($args, $instance)
    {
        echo $args['before_widget'];

        // And here do whatever you want
        echo $args['before_title'];
        echo $args['after_title'];

        $tag = isset($instance[self::TAG_ID]) ? $instance[self::TAG_ID] : null;
        $eventsQuery = [
            'start_date' => isset($instance[self::START_DATE_ID]) ? $instance[self::START_DATE_ID] : null,
            'end_date' => isset($instance[self::END_DATE_ID]) ? $instance[self::END_DATE_ID] : null,
        ];

        if ($tag && $tag !== 'any' && $tag !== 'ANY') {
            $eventsQuery['tag'] = $tag;
        }

        $events = array_filter(array_map(function ($event) {
            if ($event instanceof WP_Post) {
                return Helper::convert_wp_object($event);
            }

            return null;
        }, tribe_get_events($eventsQuery)));

        $coachs = Timber::get_posts([
            'post_type' => PostTypes::POST_TYPE,
            'post_status' => 'publish',
            'numberposts' => -1,
            'order' => 'ASC',
        ]);

        $coachsByEventId = [];
        foreach ($events as $event) {
            $id = (string) $event->id;

            $coachPerEvent = array_filter($coachs, function (Post $coach) use ($id) {
                return in_array($id, $coach->custom['_coachs_cmb_trainings']);
            });

            $coachsByEventId[$id] = $coachPerEvent;
        }

        Timber::render('Coachs_Event_List/index.html.twig', [
            'title' => isset($instance[self::TITLE]) ? $instance[self::TITLE] : '',
            'events' => $events,
            'coachsByEventId' => $coachsByEventId,
            'domain' => C_TEXTDOMAIN,
        ]);

        echo $args['after_widget'];
    }

    /**
     * Field Text.
     *
     * @param    array
     * @param    string
     *
     * @return string
     *
     * @since    1.5
     */
    public function create_field_date($key, $out = '')
    {
        $out .= $this->create_field_label($key['name'], $key['_id']).'<br/>';

        $out .= '<input type="date" ';

        if (isset($key['class'])) {
            $out .= 'class="'.esc_attr($key['class']).'" ';
        }

        $value = isset($key['value']) ? $key['value'] : $key['std'];

        $out .= 'id="'.esc_attr($key['_id']).'" name="'.esc_attr($key['_name']).'" value="'.esc_attr__($value).'" ';

        if (isset($key['size'])) {
            $out .= 'size="'.esc_attr($key['size']).'" ';
        }

        $out .= ' />';

        if (isset($key['desc'])) {
            $out .= '<br/><small class="description">'.esc_html($key['desc']).'</small>';
        }

        return $out;
    }

    /**
     * Initialize the class.
     *
     * @return void
     */
    public function initialize()
    {
        add_action(
            'widgets_init',
            function () {
                register_widget('Coachs\Integrations\Widgets\Coachs_Event_List');
            }
        );
    }
}
