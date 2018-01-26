<?php
App::uses('AppController', 'Controller');
/**
 * UserEnquiries Controller
 *
 * @property UserEnquiry $UserEnquiry
 * @property PaginatorComponent $Paginator
 */
class UserEnquiriesController extends AppController {

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
		$this->UserEnquiry->recursive = 0;
		$this->set('userEnquiries', $this->Paginator->paginate());
	}

/**
 * view method
 *
 * @throws NotFoundException
 * @param string $id
 * @return void
 */
	public function view($id = null) {
		if (!$this->UserEnquiry->exists($id)) {
			throw new NotFoundException(__('Invalid user enquiry'));
		}
		$options = array('conditions' => array('UserEnquiry.' . $this->UserEnquiry->primaryKey => $id));
		$this->set('userEnquiry', $this->UserEnquiry->find('first', $options));
	}

/**
 * add method
 *
 * @return void
 */
	public function add() {
		if ($this->request->is('post')) {
			$this->UserEnquiry->create();
			if ($this->UserEnquiry->save($this->request->data)) {
				$this->Session->setFlash(__('The user enquiry has been saved.'));
				return $this->redirect(array('action' => 'index'));
			} else {
				$this->Session->setFlash(__('The user enquiry could not be saved. Please, try again.'));
			}
		}
		$products = $this->UserEnquiry->Product->find('list');
		$productTypes = $this->UserEnquiry->ProductType->find('list');
		$productVarieties = $this->UserEnquiry->ProductVariety->find('list');
		$this->set(compact('products', 'productTypes', 'productVarieties'));
	}

/**
 * edit method
 *
 * @throws NotFoundException
 * @param string $id
 * @return void
 */
	public function edit($id = null) {
		if (!$this->UserEnquiry->exists($id)) {
			throw new NotFoundException(__('Invalid user enquiry'));
		}
		if ($this->request->is(array('post', 'put'))) {
			if ($this->UserEnquiry->save($this->request->data)) {
				$this->Session->setFlash(__('The user enquiry has been saved.'));
				return $this->redirect(array('action' => 'index'));
			} else {
				$this->Session->setFlash(__('The user enquiry could not be saved. Please, try again.'));
			}
		} else {
			$options = array('conditions' => array('UserEnquiry.' . $this->UserEnquiry->primaryKey => $id));
			$this->request->data = $this->UserEnquiry->find('first', $options);
		}
		$products = $this->UserEnquiry->Product->find('list');
		$productTypes = $this->UserEnquiry->ProductType->find('list');
		$productVarieties = $this->UserEnquiry->ProductVariety->find('list');
		$this->set(compact('products', 'productTypes', 'productVarieties'));
	}

/**
 * delete method
 *
 * @throws NotFoundException
 * @param string $id
 * @return void
 */
	public function delete($id = null) {
		$this->UserEnquiry->id = $id;
		if (!$this->UserEnquiry->exists()) {
			throw new NotFoundException(__('Invalid user enquiry'));
		}
		$this->request->allowMethod('post', 'delete');
		if ($this->UserEnquiry->delete()) {
			$this->Session->setFlash(__('The user enquiry has been deleted.'));
		} else {
			$this->Session->setFlash(__('The user enquiry could not be deleted. Please, try again.'));
		}
		return $this->redirect(array('action' => 'index'));
	}
}
