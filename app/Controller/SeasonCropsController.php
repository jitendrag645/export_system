<?php
App::uses('AppController', 'Controller');
/**
 * SeasonCrops Controller
 *
 * @property SeasonCrop $SeasonCrop
 * @property PaginatorComponent $Paginator
 */
class SeasonCropsController extends AppController {

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
		$this->SeasonCrop->recursive = 0;
		$this->set('seasonCrops', $this->Paginator->paginate());
	}

/**
 * view method
 *
 * @throws NotFoundException
 * @param string $id
 * @return void
 */
	public function view($id = null) {
		if (!$this->SeasonCrop->exists($id)) {
			throw new NotFoundException(__('Invalid season crop'));
		}
		$options = array('conditions' => array('SeasonCrop.' . $this->SeasonCrop->primaryKey => $id));
		$this->set('seasonCrop', $this->SeasonCrop->find('first', $options));
	}

/**
 * add method
 *
 * @return void
 */
	public function add() {
		if ($this->request->is('post')) {
			$this->SeasonCrop->create();
			if ($this->SeasonCrop->save($this->request->data)) {
				$this->Session->setFlash(__('The season crop has been saved.'));
				return $this->redirect(array('action' => 'index'));
			} else {
				$this->Session->setFlash(__('The season crop could not be saved. Please, try again.'));
			}
		}
		$plots = $this->SeasonCrop->Plot->find('list');
		$users = $this->SeasonCrop->User->find('list');
		$products = $this->SeasonCrop->Product->find('list');
		$this->set(compact('plots', 'users', 'products'));
	}

/**
 * edit method
 *
 * @throws NotFoundException
 * @param string $id
 * @return void
 */
	public function edit($id = null) {
		if (!$this->SeasonCrop->exists($id)) {
			throw new NotFoundException(__('Invalid season crop'));
		}
		if ($this->request->is(array('post', 'put'))) {
			if ($this->SeasonCrop->save($this->request->data)) {
				$this->Session->setFlash(__('The season crop has been saved.'));
				return $this->redirect(array('action' => 'index'));
			} else {
				$this->Session->setFlash(__('The season crop could not be saved. Please, try again.'));
			}
		} else {
			$options = array('conditions' => array('SeasonCrop.' . $this->SeasonCrop->primaryKey => $id));
			$this->request->data = $this->SeasonCrop->find('first', $options);
		}
		$plots = $this->SeasonCrop->Plot->find('list');
		$users = $this->SeasonCrop->User->find('list');
		$products = $this->SeasonCrop->Product->find('list');
		$this->set(compact('plots', 'users', 'products'));
	}

/**
 * delete method
 *
 * @throws NotFoundException
 * @param string $id
 * @return void
 */
	public function delete($id = null) {
		$this->SeasonCrop->id = $id;
		if (!$this->SeasonCrop->exists()) {
			throw new NotFoundException(__('Invalid season crop'));
		}
		$this->request->allowMethod('post', 'delete');
		if ($this->SeasonCrop->delete()) {
			$this->Session->setFlash(__('The season crop has been deleted.'));
		} else {
			$this->Session->setFlash(__('The season crop could not be deleted. Please, try again.'));
		}
		return $this->redirect(array('action' => 'index'));
	}
}
