<?php defined('BASEPATH') OR exit('No direct script access allowed');
	//
	class Test extends CI_Controller {
		public function __construct() {
			parent::__construct();
			$this->load->database();
			$this->load->model(array('all_model','common_model'));
			$this->load->helper(array('common_helper','url','language'));
		}

		public function index(){
			// $this->load->view('admin/login');
		}

		public function abhi(){
			// echo "hi";exit;
			$data['cards'] = $this->common_model->getAll("cards");

			$realisation= array();

			if(count($data['cards'])>0){
				for($i=0;$i<count($data['cards']);$i++){

					$test_string = array( 
						array (
		                    'id' => $data['cards'][$i]['id'],
		                    'card_name' => $data['cards'][$i]['card_name'],
		                    'cards_synopsis' => $data['cards'][$i]['cards_synopsis'],
		                    'card_image' => $data['cards'][$i]['card_image'],
		                    'card_background_color' => $data['cards'][$i]['card_background_color'],
		                    'card_container_background_color' => $data['cards'][$i]['card_container_background_color'],
		                    'annual_fees' => $data['cards'][$i]['annual_fees'],
		                    'container_feature1_title' => $data['cards'][$i]['container_feature1_title'],
		                    'container_feature1_description' => $data['cards'][$i]['container_feature1_description'],
		                    'container_feature2_title' => $data['cards'][$i]['container_feature2_title'],
		                    'container_feature2_description' => $data['cards'][$i]['container_feature2_description'],
		                    'apply_now_url' => $data['cards'][$i]['apply_now_url'],
		                    'reward_point_inr' => $data['cards'][$i]['reward_point_inr'],
		                    'is_active' => $data['cards'][$i]['is_active'],
		                    'is_deleted' => $data['cards'][$i]['is_deleted'],
		                    'created_at' => $data['cards'][$i]['created_at'],
		                    'updated_at' => $data['cards'][$i]['updated_at'],
		                    'renewal_fees' => $data['cards'][$i]['renewal_fees'],
		                    'card_standard_image' => $data['cards'][$i]['card_standard_image'],
		                    'reward_point_per_100' => $data['cards'][$i]['reward_point_per_100'],
		                    'card_benifits_text' => $data['cards'][$i]['card_benifits_text'],
		                    'cards_title' => $data['cards'][$i]['cards_title'],
		                    'bottom_banner_img' => $data['cards'][$i]['bottom_banner_img'],
		                    'bottom_banner_title' => $data['cards'][$i]['bottom_banner_title'],
		                    'bottom_banner_description' => $data['cards'][$i]['bottom_banner_description'],
		                    'bottom_banner_cta' => $data['cards'][$i]['bottom_banner_cta'],
		                    'slug' => $data['cards'][$i]['slug'],
		                    'container_sub_heading' => $data['cards'][$i]['container_sub_heading'],
		                    'subtitle' => $data['cards'][$i]['subtitle'],
		                    'key_benifits' => $data['cards'][$i]['key_benifits'],
		                    'rewards_on_spend' => $data['cards'][$i]['rewards_on_spend'],
		                    'welcome_gift' => $data['cards'][$i]['welcome_gift'],
		                    'additional_benifits' => $data['cards'][$i]['additional_benifits'],
		                    'eligibility' => $data['cards'][$i]['eligibility'],
		                    'lounge_access' => $data['cards'][$i]['lounge_access'],
		                    'milestone' => $data['cards'][$i]['milestone'],
		                    'header_banner' => $data['cards'][$i]['header_banner'],
		                    'header_banner_webp' => $data['cards'][$i]['header_banner_webp'],
		                    'golf_access' => $data['cards'][$i]['golf_access'],
		                    'list_order' => $data['cards'][$i]['list_order'],
		                    'vc_sub_heading' => $data['cards'][$i]['vc_sub_heading'],
		                    'vc_cta' => $data['cards'][$i]['vc_cta'],
		                    'mob_banner' => $data['cards'][$i]['mob_banner'],
		                    'mob_banner_webp' => $data['cards'][$i]['mob_banner_webp'],
		                    'fee_waiver' => $data['cards'][$i]['fee_waiver'],
		                )
			        );
					array_push($realisation, $test_string);
				}
			}

			
			// $test =array($test_string);

			echo "<pre>";
			print_r(json_encode($realisation));exit;
		}
	}
