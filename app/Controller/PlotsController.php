<?php
App::uses('AppController', 'Controller');
/**
 * Plots Controller
 *
 * @property Plot $Plot
 * @property PaginatorComponent $Paginator
 */
class PlotsController extends AppController {

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
		$this->Plot->recursive = 0;
		$this->set('plots', $this->Paginator->paginate());
	}

/**
 * view method
 *
 * @throws NotFoundException
 * @param string $id
 * @return void
 */
	public function view($id = null) {
		if (!$this->Plot->exists($id)) {
			throw new NotFoundException(__('Invalid plot'));
		}
		$options = array('conditions' => array('Plot.' . $this->Plot->primaryKey => $id));
		$this->set('plot', $this->Plot->find('first', $options));
	}

/**
 * add method
 *
 * @return void
 */
	public function add() {
		if ($this->request->is('post')) {
			$this->Plot->create();
			if ($this->Plot->save($this->request->data)) {
				$this->Session->setFlash(__('The plot has been saved.'));
				return $this->redirect(array('action' => 'index'));
			} else {
				$this->Session->setFlash(__('The plot could not be saved. Please, try again.'));
			}
		}
		$users = $this->Plot->User->find('list');
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
		if (!$this->Plot->exists($id)) {
			throw new NotFoundException(__('Invalid plot'));
		}
		if ($this->request->is(array('post', 'put'))) {
			if ($this->Plot->save($this->request->data)) {
				$this->Session->setFlash(__('The plot has been saved.'));
				return $this->redirect(array('action' => 'index'));
			} else {
				$this->Session->setFlash(__('The plot could not be saved. Please, try again.'));
			}
		} else {
			$options = array('conditions' => array('Plot.' . $this->Plot->primaryKey => $id));
			$this->request->data = $this->Plot->find('first', $options);
		}
		$users = $this->Plot->User->find('list');
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
		$this->Plot->id = $id;
		if (!$this->Plot->exists()) {
			throw new NotFoundException(__('Invalid plot'));
		}
		$this->request->allowMethod('post', 'delete');
		if ($this->Plot->delete()) {
			$this->Session->setFlash(__('The plot has been deleted.'));
		} else {
			$this->Session->setFlash(__('The plot could not be deleted. Please, try again.'));
		}
		return $this->redirect(array('action' => 'index'));
	}
}
