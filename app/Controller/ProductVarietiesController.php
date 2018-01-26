<?php
App::uses('AppController', 'Controller');
/**
 * ProductVarieties Controller
 *
 * @property ProductVariety $ProductVariety
 * @property PaginatorComponent $Paginator
 */
class ProductVarietiesController extends AppController {

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
		$this->ProductVariety->recursive = 0;
		$this->set('productVarieties', $this->Paginator->paginate());
	}

/**
 * view method
 *
 * @throws NotFoundException
 * @param string $id
 * @return void
 */
	public function view($id = null) {
		if (!$this->ProductVariety->exists($id)) {
			throw new NotFoundException(__('Invalid product variety'));
		}
		$options = array('conditions' => array('ProductVariety.' . $this->ProductVariety->primaryKey => $id));
		$this->set('productVariety', $this->ProductVariety->find('first', $options));
	}

/**
 * add method
 *
 * @return void
 */
	public function add() {
		if ($this->request->is('post')) {
			$this->ProductVariety->create();
			if ($this->ProductVariety->save($this->request->data)) {
				$this->Session->setFlash(__('The product variety has been saved.'));
				return $this->redirect(array('action' => 'index'));
			} else {
				$this->Session->setFlash(__('The product variety could not be saved. Please, try again.'));
			}
		}
		$products = $this->ProductVariety->Product->find('list');
		$this->set(compact('products'));
	}

/**
 * edit method
 *
 * @throws NotFoundException
 * @param string $id
 * @return void
 */
	public function edit($id = null) {
		if (!$this->ProductVariety->exists($id)) {
			throw new NotFoundException(__('Invalid product variety'));
		}
		if ($this->request->is(array('post', 'put'))) {
			if ($this->ProductVariety->save($this->request->data)) {
				$this->Session->setFlash(__('The product variety has been saved.'));
				return $this->redirect(array('action' => 'index'));
			} else {
				$this->Session->setFlash(__('The product variety could not be saved. Please, try again.'));
			}
		} else {
			$options = array('conditions' => array('ProductVariety.' . $this->ProductVariety->primaryKey => $id));
			$this->request->data = $this->ProductVariety->find('first', $options);
		}
		$products = $this->ProductVariety->Product->find('list');
		$this->set(compact('products'));
	}

/**
 * delete method
 *
 * @throws NotFoundException
 * @param string $id
 * @return void
 */
	public function delete($id = null) {
		$this->ProductVariety->id = $id;
		if (!$this->ProductVariety->exists()) {
			throw new NotFoundException(__('Invalid product variety'));
		}
		$this->request->allowMethod('post', 'delete');
		if ($this->ProductVariety->delete()) {
			$this->Session->setFlash(__('The product variety has been deleted.'));
		} else {
			$this->Session->setFlash(__('The product variety could not be deleted. Please, try again.'));
		}
		return $this->redirect(array('action' => 'index'));
	}
}
