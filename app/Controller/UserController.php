<?php
App::uses('AppController', 'Controller');

class UserController extends AppController
{
    var $components = array('Session');
    var $uses = array('User');
    var $layout = "admin";

    public function beforeFilter()
    {
        parent::beforeFilter();
        // Allow users to register and logout.
        //$this->Auth->allow('add', 'logout');
    }

    public function admin_login()
    {
        //KiÃªm tra user cÃ³ quyá»�n Ä‘Äƒng nháº­p ko
        if ($this->request->is('post')) {
            if ($this->Auth->login()) {
                return $this->redirect($this->Auth->redirectUrl());
            } else {
                //$this->Flash->error(__('Invalid username or password, try again'));
                $this->Session->setFlash('Username hoáº·c pass sai');
            }
        }
    }

  
  
// public function logout(){
//         $this->redirect($this->Auth->logout());
//     }

     public function admin_logout() {
        $this->redirect($this->Auth->logout());
        //Change for :
        //I suppose that you have a logout.ctp view in your View/Pages
       // $this->redirect(array('controller' => 'pages', 'action' => 'display', 'logout')
    }
  

    public function admin_edit($id=null)
            {
                  if($this->request->is('post') || $this->request->is('put')){
            //print_r($this->request->data);exit();
            $this->User->id = $id;
            $this->User->set(array('date_updated' => date('Y:m:d H:i:s')));
            if($this->User->save($this->request->data){
                $this->Session->setFlash('Success','default',array('class'=>"alert alert-success"));
                $this->redirect(array('action'=>'list'));
            }
            
        }else{
            $this->User->id = $id;
            $this->request->data = $this->User->read();//Ä‘á»�c thÃ´ng tin user vá»›i $id, gÃ¡n vÃ o request->data hiá»ƒn thá»‹ view
        }
    }
            


    public function admin_delete($id = null)
    {
        if ($this->request->is('get')) {
            $data = $this->User->find('first', array(
                'fields' => array('id', 'username'),
                'conditions' => array('id' => $id),
                'recursive' => -1
            ));
            if (!empty($data)) {
                $this->Session->setFlash('Success');
                $this->User->delete($id);
            } else {
                $this->Session->setFlash('Error');
            }
            $this->redirect(array('action' => 'list'));
        }
    }

      public function admin_list(){
        //Lay du lieu trong table users
        $array_user = $this->User->find('all', array(
            'conditions'=>array('id > 0'),
            'recursive'   =>-1
        ));
        //Ä‘Æ°a dá»¯ liá»‡u láº¥y Ä‘Æ°á»£c qua view báº±ng biáº¿n users
        $this->set('users', $array_user);
    }
        public function admin_add(){
            $this->set('title_for_layout', 'Add user');
                if($this->request->is('post') || $this->request->is('put')){
             $now = date('Y:m:d H:i:s');
            $this->User->set(array('date_created'=>$now));
            $this->User->set(array('date_updated'=>$now));
                if($this->User->save($this->request->data)){
             $this->Session->setFlash('Success','default',array('class'=>"alert alert-success"));
             $this->redirect(array('action'=>'list'));
             }
        }
    }
}