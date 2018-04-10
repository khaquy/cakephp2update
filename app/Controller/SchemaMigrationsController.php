<?php
App::uses('AppController', 'Controller');
/**
 * SchemaMigrations Controller
 *
 * @property SchemaMigration $SchemaMigration
 * @property PaginatorComponent $Paginator
 */
class SchemaMigrationsController extends AppController {

/**
 * Components
 *
 * @var array
 */
	public $components = array('Paginator');

/**
 * index method
 *
 * @return void
 */
	public function index() {
		$this->SchemaMigration->recursive = 0;
		$this->set('schemaMigrations', $this->Paginator->paginate());
	}

/**
 * view method
 *
 * @throws NotFoundException
 * @param string $id
 * @return void
 */
	public function view($id = null) {
		if (!$this->SchemaMigration->exists($id)) {
			throw new NotFoundException(__('Invalid schema migration'));
		}
		$options = array('conditions' => array('SchemaMigration.' . $this->SchemaMigration->primaryKey => $id));
		$this->set('schemaMigration', $this->SchemaMigration->find('first', $options));
	}

/**
 * add method
 *
 * @return void
 */
	public function add() {
		if ($this->request->is('post')) {
			$this->SchemaMigration->create();
			if ($this->SchemaMigration->save($this->request->data)) {
				$this->Flash->success(__('The schema migration has been saved.'));
				return $this->redirect(array('action' => 'index'));
			} else {
				$this->Flash->error(__('The schema migration could not be saved. Please, try again.'));
			}
		}
	}

/**
 * edit method
 *
 * @throws NotFoundException
 * @param string $id
 * @return void
 */
	public function edit($id = null) {
		if (!$this->SchemaMigration->exists($id)) {
			throw new NotFoundException(__('Invalid schema migration'));
		}
		if ($this->request->is(array('post', 'put'))) {
			if ($this->SchemaMigration->save($this->request->data)) {
				$this->Flash->success(__('The schema migration has been saved.'));
				return $this->redirect(array('action' => 'index'));
			} else {
				$this->Flash->error(__('The schema migration could not be saved. Please, try again.'));
			}
		} else {
			$options = array('conditions' => array('SchemaMigration.' . $this->SchemaMigration->primaryKey => $id));
			$this->request->data = $this->SchemaMigration->find('first', $options);
		}
	}

/**
 * delete method
 *
 * @throws NotFoundException
 * @param string $id
 * @return void
 */
	public function delete($id = null) {
		$this->SchemaMigration->id = $id;
		if (!$this->SchemaMigration->exists()) {
			throw new NotFoundException(__('Invalid schema migration'));
		}
		$this->request->allowMethod('post', 'delete');
		if ($this->SchemaMigration->delete()) {
			$this->Flash->success(__('The schema migration has been deleted.'));
		} else {
			$this->Flash->error(__('The schema migration could not be deleted. Please, try again.'));
		}
		return $this->redirect(array('action' => 'index'));
	}
}
