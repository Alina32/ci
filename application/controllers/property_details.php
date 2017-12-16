<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Property_details extends CI_Controller {

    private $data = [];

    public function index ()
    {
        $this->load->model('property_details_model', 'property_details');
        $this->data['property_details'] = $this->property_details->get_property_details();
        $this->load->view('static/header_view', $this->data);
        $this->load->view('property_details_viewer', $this->data);
        $this->load->view('static/footer_view', $this->data);
    }

    /**
     * [insert_property_details description]
     * @return NULL
     */
    public function insert_property_details() {
        if ( !empty($_POST) ) {
            $request['request'] = $this->input->post();
            $request_to_db = Array(
                'area' => $request['request']['area'],
                'bedroom' => $request['request']['bedroom'],
                'garage' => $request['request']['garage'],
                'description' => $request['request']['desc'],
                'title' => $request['request']['title'],
                'state' => $request['request']['state'],

            );
            $this->load->model('property_details_model');
            $this->property_details_model->insert_property_details($request_to_db);
        }
        $this->load->model('state_model');
        $this->data['states'] = $this->state_model->get_states();
        $this->load->view('static/header_view', $this->data);
        $this->load->view('insert_property_details_viewer', $this->data);
        $this->load->view('static/footer_view', $this->data);
    }
}