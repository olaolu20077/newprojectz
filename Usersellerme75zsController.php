<?php
declare(strict_types=1);

namespace App\Controller;

/**
 * Usersellerme75zs Controller
 *
 * @property \App\Model\Table\Usersellerme75zsTable $Usersellerme75zs
 * @method \App\Model\Entity\Usersellerme75z[]|\Cake\Datasource\ResultSetInterface paginate($object = null, array $settings = [])
 */
class Usersellerme75zsController extends AppController
{
    /**
     * Index method
     *
     * @return \Cake\Http\Response|null|void Renders view
     */
    public function index()
    {
        $this->paginate = [
            'contain' => ['Brandmanuaoprs', 'Categorimanuaoprs', 'Citimanuaoprs', 'Pricemanuaoprs', 'Statimanuaoprs', 'Userloginme75zs'],
        ];
        $usersellerme75zs = $this->paginate($this->Usersellerme75zs);

        $this->set(compact('usersellerme75zs'));
    }

    /**
     * View method
     *
     * @param string|null $id Usersellerme75z id.
     * @return \Cake\Http\Response|null|void Renders view
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function view($id = null)
    {
        $usersellerme75z = $this->Usersellerme75zs->get($id, [
            'contain' => ['Brandmanuaoprs', 'Categorimanuaoprs', 'Citimanuaoprs', 'Pricemanuaoprs', 'Statimanuaoprs', 'Userloginme75zs'],
        ]);

        $this->set(compact('usersellerme75z'));
    }

    /**
     * Add method
     *
     * @return \Cake\Http\Response|null|void Redirects on successful add, renders view otherwise.
     */
    public function add()
    {
        $usersellerme75z = $this->Usersellerme75zs->newEmptyEntity();
        if ($this->request->is('post')) {
            $usersellerme75z = $this->Usersellerme75zs->patchEntity($usersellerme75z, $this->request->getData());
            if ($this->Usersellerme75zs->save($usersellerme75z)) {
                $this->Flash->success(__('The usersellerme75z has been saved.'));

                return $this->redirect(['action' => 'index']);
            }
            $this->Flash->error(__('The usersellerme75z could not be saved. Please, try again.'));
        }
        $brandmanuaoprs = $this->Usersellerme75zs->Brandmanuaoprs->find('list', ['limit' => 200])->all();
        $categorimanuaoprs = $this->Usersellerme75zs->Categorimanuaoprs->find('list', ['limit' => 200])->all();
        $citimanuaoprs = $this->Usersellerme75zs->Citimanuaoprs->find('list', ['limit' => 200])->all();
        $pricemanuaoprs = $this->Usersellerme75zs->Pricemanuaoprs->find('list', ['limit' => 200])->all();
        $statimanuaoprs = $this->Usersellerme75zs->Statimanuaoprs->find('list', ['limit' => 200])->all();
        $userloginme75zs = $this->Usersellerme75zs->Userloginme75zs->find('list', ['limit' => 200])->all();
        $this->set(compact('usersellerme75z', 'brandmanuaoprs', 'categorimanuaoprs', 'citimanuaoprs', 'pricemanuaoprs', 'statimanuaoprs', 'userloginme75zs'));
    }

    /**
     * Edit method
     *
     * @param string|null $id Usersellerme75z id.
     * @return \Cake\Http\Response|null|void Redirects on successful edit, renders view otherwise.
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function edit($id = null)
    {
        $usersellerme75z = $this->Usersellerme75zs->get($id, [
            'contain' => [],
        ]);
        if ($this->request->is(['patch', 'post', 'put'])) {
            $usersellerme75z = $this->Usersellerme75zs->patchEntity($usersellerme75z, $this->request->getData());
            if ($this->Usersellerme75zs->save($usersellerme75z)) {
                $this->Flash->success(__('The usersellerme75z has been saved.'));

                return $this->redirect(['action' => 'index']);
            }
            $this->Flash->error(__('The usersellerme75z could not be saved. Please, try again.'));
        }
        $brandmanuaoprs = $this->Usersellerme75zs->Brandmanuaoprs->find('list', ['limit' => 200])->all();
        $categorimanuaoprs = $this->Usersellerme75zs->Categorimanuaoprs->find('list', ['limit' => 200])->all();
        $citimanuaoprs = $this->Usersellerme75zs->Citimanuaoprs->find('list', ['limit' => 200])->all();
        $pricemanuaoprs = $this->Usersellerme75zs->Pricemanuaoprs->find('list', ['limit' => 200])->all();
        $statimanuaoprs = $this->Usersellerme75zs->Statimanuaoprs->find('list', ['limit' => 200])->all();
        $userloginme75zs = $this->Usersellerme75zs->Userloginme75zs->find('list', ['limit' => 200])->all();
        $this->set(compact('usersellerme75z', 'brandmanuaoprs', 'categorimanuaoprs', 'citimanuaoprs', 'pricemanuaoprs', 'statimanuaoprs', 'userloginme75zs'));
    }

    /**
     * Delete method
     *
     * @param string|null $id Usersellerme75z id.
     * @return \Cake\Http\Response|null|void Redirects to index.
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function delete($id = null)
    {
        $this->request->allowMethod(['post', 'delete']);
        $usersellerme75z = $this->Usersellerme75zs->get($id);
        if ($this->Usersellerme75zs->delete($usersellerme75z)) {
            $this->Flash->success(__('The usersellerme75z has been deleted.'));
        } else {
            $this->Flash->error(__('The usersellerme75z could not be deleted. Please, try again.'));
        }

        return $this->redirect(['action' => 'index']);
    }





 public function regaseller()
    {
        $usersellerme75z = $this->Usersellerme75zs->newEmptyEntity();
        if ($this->request->is('post')) {
            $usersellerme75z = $this->Usersellerme75zs->patchEntity($usersellerme75z, $this->request->getData());

        $postData = $this->request->getData();


 

        $postImage = $this->request->getData('itemfoto');



           $nami = $postImage->getClientFilename();
           $type = $postImage->getClientMediaType();

           $targetPath = WWW_ROOT. 'img'. DS . 'post_image'. DS. $nami;



           if ($type == 'image/jpeg' || $type == 'image/jpg' || $type == 'image/png') {
                if (!empty($nami)) {
                    if ($postImage->getSize() > 0 && $postImage->getError() == 0) {
                        $postImage->moveTo($targetPath); 
                        $postData['itemfoto'] = $nami;
                    }
                }
            }


          $usersellerme75z = $this->Usersellerme75zs->patchEntity($usersellerme75z, $postData);
 
            if ($this->Usersellerme75zs->save($usersellerme75z)) {
                $this->Flash->success(__('The usersellerme75z has been saved.'));

                return $this->redirect(['action' => 'index']);
            }



            if ($this->Usersellerme75zs->save($usersellerme75z)) {
                $this->Flash->success(__('The usersellerme75z has been saved.'));

                return $this->redirect(['action' => 'index']);
            }
         var_dump($usersellerme75z->getErrors());//
            $this->Flash->error(__('The usersellerme75z could not be saved. Please, try again.'));
        }
        $brandmanuaoprs = $this->Usersellerme75zs->Brandmanuaoprs->find('list', ['limit' => 200])->all();
        $categorimanuaoprs = $this->Usersellerme75zs->Categorimanuaoprs->find('list', ['limit' => 200])->all();
        $citimanuaoprs = $this->Usersellerme75zs->Citimanuaoprs->find('list', ['limit' => 200])->all();
        $pricemanuaoprs = $this->Usersellerme75zs->Pricemanuaoprs->find('list', ['limit' => 200])->all();
        $statimanuaoprs = $this->Usersellerme75zs->Statimanuaoprs->find('list', ['limit' => 200])->all();
        $userloginme75zs = $this->Usersellerme75zs->Userloginme75zs->find('list', ['limit' => 200])->all();
        $this->set(compact('usersellerme75z', 'brandmanuaoprs', 'categorimanuaoprs', 'citimanuaoprs', 'pricemanuaoprs', 'statimanuaoprs', 'userloginme75zs'));
    }






}
