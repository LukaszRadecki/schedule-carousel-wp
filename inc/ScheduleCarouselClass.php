<?php


/* For the module to work properly, we need to configure
date type custom fields for `start_date` and `end_date` of slide.

In addition, we have to configure file type custom fields for images of our slide
for all resolutions (slide-img-xs - slide-img-xl).
*/

class ScheduleCarouselClass
{

    private function getMatchedPost() {

        $today = date("Ymd");

        return get_posts( array(
                                	'numberposts'	=> -1,
                                	'post_type'		=> 'schedule-posts',
                                  'meta_key'    => 'order',
                                  'orderby'			=> 'meta_value',
                                  'order'				=> 'ASC',
                                	'meta_query'	=> array(
                                		'relation'		=> 'AND',
                                		array(
                                			'key'		  => 'start_date',
                                			'value'		=> $today,
                                      'type'		=> 'NUMERIC',
                                			'compare'	=> '<='
                                		),
                                		array(
                                			'key'		  => 'end_date',
                                			'value'		=> $today,
                                			'type'		=> 'NUMERIC',
                                			'compare'	=> '>='
                                		)
                                	)
                                )
                        );
    }

    public function isAnySlideMatch(){
      return count($this->getMatchedPost());
    }

    public function renderScheduleSlider(){
      $adPosts = $this->getMatchedPost();
      include('tpl/ad-gallery-template.php');
    }
}
