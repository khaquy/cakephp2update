<?php
App::uses('AppController', 'Controller');

/**
 * Posts Controller
 *
 * @property Post $Post
 * @property PaginatorComponent $Paginator
 * @property SessionComponent $Session
 * @property FlashComponent $Flash
 */
class PostsController extends AppController {

/**
 * Helpers
 *
 * @var array
 */
	// public $helpers = array('Y');
	     var $helpers = array('Paginator','Html');
	    // public $helpers = array('Html', 'Form');

/**
 * Components
 *
 * @var array
 */
	public $components = array('Paginator', 'Session', 'Flash');

/**
 * index method
 *
 * @return void
 */
	public function index() {
		$this->Post->recursive = 0;
		$this->set('posts', $this->Paginator->paginate());
	}

/**
 * view method
 *
 // * @throws NotFoundException
 // * @param string $id
 // * @return void
 // // */
	// public function view($id = null) {
	// 	if (!$this->Post->exists($id)) {
	// 		throw new NotFoundException(__('Invalid post'));
	// 	}
	// 	$options = array('conditions' => array('Post.' . $this->Post->primaryKey => $id));
	// 	$this->set('post', $this->Post->find('first', $options));
	// }



// public  function view($id = null, $slug = null) {
//   $this->Post->id = $this->params['id'];
//   $this->set('post', $this->Post->read());
// }


//    public function view($slug = null) {
//     if (is_null($slug)) {
//         $this->cakeError('error404');
//     } else {
//         $post = $this->Post->findBySlug($slug);
//         $this->set(compact('post'));
//     }
// }
// /**

/**
 * add method
 *
 * @return void
 */
	public function add() {
		if ($this->request->is('post')) {
			$this->Post->create();
			if ($this->Post->save($this->request->data)) {
				$this->Flash->success(__('The post has been saved.'));
				return $this->redirect(array('action' => 'index'));
			} else {
				$this->Flash->error(__('The post could not be saved. Please, try again.'));
			}
		}
		$users = $this->Post->User->find('list');
		$this->set(compact('users'));
	}


 
public  function view($id = null, $slug = null) {
  $this->Post->id = $this->params['id'];
  $this->set('post', $this->Post->read());

   $this->set(compact('post'));
}

/**
 * edit method
 *
 * @throws NotFoundException
 * @param string $id
 * @return void
 */
	public function edit($id = null) {
		if (!$this->Post->exists($id)) {
			throw new NotFoundException(__('Invalid post'));
		}
		if ($this->request->is(array('post', 'put'))) {
 				$this->Post->id = $id;
 				
			if ($this->Post->save($this->request->data)) {
				
				$this->Flash->success('The post has been saved.');
				return $this->redirect(array('action' => 'index'));
			} else {
			 $this->Flash->error(__('The post could not be saved. Please, try again.'));
			}
		} else {
			$options = array('conditions' => array('Post.' . $this->Post->primaryKey => $slug));
			$this->request->data = $this->Post->find('first', $options);
		}
		$users = $this->Post->User->find('list');
		$this->set(compact('users'));
		
	}


// public function edit($id) {
//     if (!$id) {
//         throw new NotFoundException(__('Invalid post'));
//     }

//     $post = $this->Post->findById($id);
//     // if (!$post) {
//     //     throw new NotFoundException(__('Invalid post'));
//     // }

//     if ($this->request->is('post') || $this->request->is('put')) {
//         $this->Post->id = $id;
//         if ($this->Post->save($this->request->data)) {
//             $this->Flash->success(__('Your post has been updated.'));
//             return $this->redirect(array('action' => 'index'));
//         }
//         $this->Flash->error(__('Unable to update your post.'));
//     }

//     if (!$this->request->data) {
//         $this->request->data = $post;
//     }
// }
/**
 * delete method
 *
 * @throws NotFoundException
 * @param string $id
 * @return void
 */
	public function delete($id = null) {
		$this->Post->id = $id;
		if (!$this->Post->exists()) {
			throw new NotFoundException(__('Invalid post'));
		}
		$this->request->allowMethod('post', 'delete');
		if ($this->Post->delete()) {
			$this->Flash->success(__('The post has been deleted.'));
		} else {
			$this->Flash->error(__('The post could not be deleted. Please, try again.'));
		}
		return $this->redirect(array('action' => 'index'));
	}

/**
 * admin_index method
 *
 * @return void
 */
	public function admin_index() {
		$this->Post->recursive = 0;
		$this->set('posts', $this->Paginator->paginate());
	}

/**
 * admin_view method
 *
 * @throws NotFoundException
 * @param string $id
 * @return void
 */
	public function admin_view($id = null) {
		if (!$this->Post->exists($id)) {
			throw new NotFoundException(__('Invalid post'));
		}
		$options = array('conditions' => array('Post.' . $this->Post->primaryKey => $id));
		$this->set('post', $this->Post->find('first', $options));
	}

/**
 * admin_add method
 *
 * @return void
 */
	public function admin_add() {
		if ($this->request->is('post')) {
			$this->Post->create();
			if ($this->Post->save($this->request->data)) {
				$this->Flash->success(__('The post has been saved.'));
				return $this->redirect(array('action' => 'index'));
			} else {
				$this->Flash->error(__('The post could not be saved. Please, try again.'));
			}
		}
		$users = $this->Post->User->find('list');
		$this->set(compact('users'));
	}

/**
 * admin_edit method
 *
 * @throws NotFoundException
 * @param string $id
 * @return void
 */
	public function admin_edit($id = null) {
		if (!$this->Post->exists($id)) {
			throw new NotFoundException(__('Invalid post'));
		}
		if ($this->request->is(array('post', 'put'))) {
			// if ($this->Post->save($this->request->data))
if ($this->Post->save($this->request->data)))
$this->Session->setFlash('Saved!');
			 // {
				// $this->Flash->success(__('The post has been saved.'));
				return $this->redirect(array('action' => 'index'));
			} else {
				$this->Session->error(__('The post could not be saved. Please, try again.'));
			}
		} else {
			$options = array('conditions' => array('Post.' . $this->Post->primaryKey => $id));
			$this->request->data = $this->Post->find('first', $options);
		}
		$users = $this->Post->User->find('list');
		$this->set(compact('users'));
	}

/**
 * admin_delete method
 *
 * @throws NotFoundException
 * @param string $id
 * @return void
 */
	public function admin_delete($id = null) {
		$this->Post->id = $id;
		if (!$this->Post->exists()) {
			throw new NotFoundException(__('Invalid post'));
		}
		$this->request->allowMethod('post', 'delete');
		if ($this->Post->delete()) {
			$this->Flash->success(__('The post has been deleted.'));
		} else {
			$this->Flash->error(__('The post could not be deleted. Please, try again.'));
		}
		return $this->redirect(array('action' => 'index'));
	}
}
