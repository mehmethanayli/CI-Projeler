<?php

class SubmitForm extends CI_Controller
{

    public function __construct()
    {
        parent::__construct();
        $this->load->model("Submit_Form_Model");

    }

    public function index()
    {


        //Model Eğer kullanılacaksa öncesinde yüklenmelidir.
        /*$this->load->model("todo_model");

        //Veriler items değişkeninin içerisine aktarıldı.
        $items = $this->todo_model->getAll();

        //View'e gönderilecek olan yapı oluşturuldu.
        $viewData = array(
            "todos" => $items,
        );

        //View yüklenirken $viewData'nında gönderilmesi sağlandı.
        $this->load->view("todo", $viewData);*/
        $this->load->view("submitForm");
    }


    public function insert()
    {

        //echo "Form Kayıt İşlemi";
        //Form Verileri
        $isim           = $this->input->get("isim");
        $email          = $this->input->get("email");
        $kullaniciAdi   = $this->input->get("kullaniciAdi");
        $parola         = $this->input->get("parola");
        $adres          = $this->input->get("adres");
        $sehir          = $this->input->get("sehir");
        $ilce           = $this->input->get("ilce");
        $mahalle        = $this->input->get("mahalle");
        $kartNumarasi   = $this->input->get("kartNumarasi");
        $kartIsim       = $this->input->get("kartIsim");
        $cvv            = $this->input->get("cvv");
        $gsm            = $this->input->get("gsm");

        $data = [
            "isim"           => $isim,
            "email"          => $email,
            "kullaniciAdi"   => $kullaniciAdi,
            "parola"         => $parola,
            "adres"          => $adres,
            "sehir"          => $sehir,
            "ilce"           => $ilce,
            "mahalle"        => $mahalle,
            "kartNumarasi"   => $kartNumarasi,
            "kartIsim"       => $kartIsim,
            "cvv"            => $cvv,
            "gsm"            => $gsm
        ];
        $insert = $this->Submit_Form_Model->insert($data);

        if ($insert) {

            echo "Kayıt İşlemi Başarılı";
        }
    }

    public function delete($id)
    {
        $this->load->model("todo_model");

        $this->todo_model->delete($id);

        redirect(base_url());
    }

    public function isComplatedSetter($id)
    {
        $this->load->model("todo_model");
        $complated = ($this->input->post("complated") == true) ? 1 : 0;
        $this->todo_model->update($id, array(
            "complatedAt" => $complated
        ));
    }
}
