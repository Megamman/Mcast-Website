<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Get_Model extends CI_Model{

    public function get_students(){
        return $this->db->select('  tbl_login.id_login,
                                    tbl_login.user_id,
                                    tbl_users.user_name,
                                    tbl_users.user_surname,
                                    tbl_login.email_login,
                                    tbl_courses.course_name,
                                    tbl_courses.course_lvl,
                                    tbl_std.std_link')
                        ->join('tbl_users',     'tbl_users.tbl_login_id_login   = tbl_login.id_login',        'left')
                        ->join('tbl_std',       'tbl_std.tbl_login_id_login     = tbl_login.id_login',        'left')
                        ->join('tbl_courses',   'tbl_std.tbl_courses_course_id  = tbl_courses.course_id',     'left')
                        ->where('tbl_login.tbl_roles_id', '3')
                        ->get('tbl_login');
    }

    public function get_news(){
        return $this->db->select('  news_id,
                                    news_title,
                                    news_desc')
                        ->get('tbl_news');
    }

    public function get_lecturers(){
        return $this->db->select('  tbl_login.id_login,
                                    tbl_users.user_name,
                                    tbl_users.user_surname,
                                    tbl_lects.lect_end')
                        ->join('tbl_lects',     'tbl_lects.tbl_login_id_login   = tbl_login.id_login', 'left')
                        ->join('tbl_users',     'tbl_users.tbl_login_id_login   = tbl_login.id_login', 'left')
                        ->get('tbl_login');
    }

    public function get_forms(){
        return $this->db->select('  form_id,
                                    form_name,
                                    form_desc')
                        ->get('tbl_forms');
    }

    public function get_vacancy(){
        return $this->db->select('  job_id,
                                    job_name,
                                    job_desc,
                                    job_end')
                        ->get('tbl_jobs');
    }
}
