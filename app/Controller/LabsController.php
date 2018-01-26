<?php
App::uses('AppController', 'Controller');
/**
 * Labs Controller
 *
 * @property Lab $Lab
 * @property PaginatorComponent $Paginator
 */
class LabsController extends AppController {

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
		$this->Lab->recursive = 0;
		$this->set('labs', $this->Paginator->paginate());
	}

/**
 * view method
 *
 * @throws NotFoundException
 * @param string $id
 * @return void
 */
	public function view($id = null) {
		if (!$this->Lab->exists($id)) {
			throw new NotFoundException(__('Invalid lab'));
		}
		$options = array('conditions' => array('Lab.' . $this->Lab->primaryKey => $id));
		$this->set('lab', $this->Lab->find('first', $options));
	}

/**
 * add method
 *
 * @return void
 */
	public function add() {
		if ($this->request->is('post')) {
			$this->Lab->create();
			if ($this->Lab->save($this->request->data)) {
				$this->Session->setFlash(__('The lab has been saved.'));
				return $this->redirect(array('action' => 'index'));
			} else {
				$this->Session->setFlash(__('The lab could not be saved. Please, try again.'));
			}
		}
		$users = $this->Lab->User->find('list');
		$this->set(compact('users'));
	}

/**
 * edit method
 *
 * @throws NotFoundException
 * @param string $id
 * @return void
 */
	public function edit($id = null) {
		if (!$this->Lab->exists($id)) {
			throw new NotFoundException(__('Invalid lab'));
		}
		if ($this->request->is(array('post', 'put'))) {
			if ($this->Lab->save($this->request->data)) {
				$this->Session->setFlash(__('The lab has been saved.'));
				return $this->redirect(array('action' => 'index'));
			} else {
				$this->Session->setFlash(__('The lab could not be saved. Please, try again.'));
			}
		} else {
			$options = array('conditions' => array('Lab.' . $this->Lab->primaryKey => $id));
			$this->request->data = $this->Lab->find('first', $options);
		}
		$users = $this->Lab->User->find('list');
		$this->set(compact('users'));
	}

/**
 * delete method
 *
 * @throws NotFoundException
 * @param string $id
 * @return void
 */
	public function delete($id = null) {
		$this->Lab->id = $id;
		if (!$this->Lab->exists()) {
			throw new NotFoundException(__('Invalid lab'));
		}
		$this->request->allowMethod('post', 'delete');
		if ($this->Lab->delete()) {
			$this->Session->setFlash(__('The lab has been deleted.'));
		} else {
			$this->Session->setFlash(__('The lab could not be deleted. Please, try again.'));
		}
		return $this->redirect(array('action' => 'index'));
	}
}
