<?php if (! defined('BASEPATH')) exit('No direct script access allowed');

class homepagesetting extends CI_Controller
{
    public function index()
    {
        $data['title'] = SITE_NAME . ': Home page settings';
        $data['msg'] = '';
        // $row = $this->home_page_model->get_home_img();
		// $data['row'] = $row;
        $this->load->view('admin/home_setting', $data);
        return;
    }
    public function update($id = '')
    {

        if ($id == '') {
            redirect(base_url() . 'admin/homepagesetting', '');
            exit;
        }

        $data['title'] = SITE_NAME . ': Home page settings';
        $data['msg'] = '';
        $ads_array = array(
            'image_1' => $this->input->post('image_1'),
            'image_2' => $this->input->post('image_2')
        );

        $this->home_page_model->update_homepage($id, $ads_array);
        $this->session->set_flashdata('update_action', true);
        redirect(base_url('admin/homepagesetting'));
        return;
    }
}
