<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\Usersellerme75z $usersellerme75z
 * @var \Cake\Collection\CollectionInterface|string[] $brandmanuaoprs
 * @var \Cake\Collection\CollectionInterface|string[] $categorimanuaoprs
 * @var \Cake\Collection\CollectionInterface|string[] $citimanuaoprs
 * @var \Cake\Collection\CollectionInterface|string[] $pricemanuaoprs
 * @var \Cake\Collection\CollectionInterface|string[] $statimanuaoprs
 * @var \Cake\Collection\CollectionInterface|string[] $userloginme75zs
 */
?>




<!--
<?php echo $this->layout = 'mygenerallaouti'?>-->

<?php // In your view file $this->Html->script('bootstrap', ['block' => true]); $this->Html->script('bootstrap.bundle.min', ['block' => true]); $this->Html->script('bootstrap.min', ['block' => true]); $this->Html->script('jquery', ['block' => true]);  $this->Html->css('bootstrap.min', ['block' => true]);  $this->Html->css('appb', ['block' => true]); ?>

<div class="container-fluid">
<div class="row">

<!-- Example split button --> <div class="btn-group "> <button type="button" class="btn btn-success">Register as a seller</button> </div></div> </div>





<option></option>







<?= $this->Form->create($usersellerme75z,['class' => 'needs-validation','enctype' => 'multipart/form-data']);?>



<?php echo $this->Form->hidden('_csrfToken', [
     'value' => $this->getRequest()->getAttribute('csrfToken')
]);?>


            
                <fieldset>
                <legend><?= __('Add Usersellerme75z') ?></legend>      




<div class="col-md-4 mb-3" >
      <label for="validationCustomUsername">Username</label>
      <div class="input-group">
        <div class="input-group-prepend">
          <span class="input-group-text" id="inputGroupPrepend">@</span>
        </div>
       <div class="col-md-6"style="position:relative; right:0px; top:-24px;"<?php  echo $this->Form->control('nami', ['label' => '','alt'=>'','class' => 'form-control','id' => 'validationCustomUsername','type' => 'text', 'placeholder' => 'Username','aria-describedby' => 'inputGroupPrepend','required' => false]);?></div>
        <div class="invalid-feedback">
          Please choose a username.
        </div>
</div>
</div>








  <div class="form-row">
    <div class="col-md-4 mb-3">
      <label for="validationCustom01"></label>
<?php  echo $this->Form->control('fon', ['label' => 'Phone number','alt'=>'','class' => 'form-control','type' => 'text','id' => 'validationCustom01','placeholder' => '+1','required' => false]);?>
      <div class="valid-feedback">
        Looks good!
      </div>
    </div>
</div>



 
 <div class="form-group">
    <label for="exampleFormControlInput1"></label>
    <?php  echo $this->Form->control('emali', ['label' => 'Email address','alt'=>'','class' => 'form-control','id' => 'exampleFormControlInput1','placeholder' => 'name@example.com','aria-describedby' => 'inputGroupPrepend','type' => 'email', 'required' => false]);?>
  </div>



<option></option>




  <div class="form-row">
    <div class="col-md-4 mb-3">
      <label for="validationCustom01"></label>
      <?php  echo $this->Form->control('statimanuaopr_name', ['label' => 'State or City','alt'=>'','class' => 'form-control','type' => 'text','list' => 'stati','id' => 'validationCustom01','placeholder' => 'England','required' => false]);?>
<datalist id="stati"> 
<option>Northern ireland</option>
 <option>England</option> 
<option>Scotland</option>
<option>Wales</option>
</datalist>
      <div class="valid-feedback">
        Looks good!
      </div>
    </div>
</div>



    <div class="col-md-4 mb-3">
      <label for="validationCustom02"></label>
      <?php echo $this->Form->control('citimanuaopr_name', ['label' => 'Town','alt'=>'','class' => 'form-control','type' => 'text','list' => 'citi','id' => 'validationCustom01','placeholder' => 'London','required' => false]);?>
     <datalist id="citi"> 
<option>London</option>
 <option></option> 
<option>Manchester</option>
<option>Liverpool</option>
<option>city</option>
</datalist>
 <div class="valid-feedback">
        Looks good!
      </div>
    </div>








    

<option></option>



<div class="form-group col-md-4">
 <?php echo $this->Form->label('categorimanuaopr_name','What is your item or business category?');?>
 <?php echo $this->Form->select('categorimanuaopr_name',['Choose...','kitchen utensils']);?>     
  </div>   




<option></option>


<option></option>


<div class="form-group col-md-4">
 <?php echo $this->Form->label('pricemanuaopr_name','What is your item price?');?>
 <?php echo $this->Form->select('pricemanuaopr_name',['Choose...','$2']);?>     
  </div>   





<option></option>



<option></option>



<div class="form-group col-md-4">
<?php echo $this->Form->label('itemdescripticondi','Describe briefly your item');?>
<?php echo $this->Form->textarea('itemdescripticondi', ['rows' => '2', 'cols' => '180', 'placeholder' => 'Allow your description to be brief and concise','escape' => false]);?>
</div> 


<option></option>



<div class="form-group">
    <label for="exampleFormControlFile1" >Upload your item photo</label>
<?php echo $this->Form->file('itemfoto',['class'=>'form-control-file','id'=>'exampleFormControlFile1','value'=>'']);?>
   
  </div>

<option></option>

<option></option>


<div class="form-group">
    <div class="form-check">
      <?php echo $this->Form->checkbox('agreeterms', ['value' => 1,'id' => 'invalidCheck','class' => 'form-check-input']);?>
      <label class="form-check-label" for="invalidCheck">
        Agree to terms and conditions
      </label>
      <div class="invalid-feedback">
        You must agree before submitting.
      </div>
    </div>
  </div>
</fieldset>


 <?php echo $this->Form->submit('Submit form',['class' =>'btn btn-primary']);?>

 <?= $this->Form->end() ?>




<script>
// Example starter JavaScript for disabling form submissions if there are invalid fields
(function() {
  'use strict';
  window.addEventListener('load', function() {
    // Fetch all the forms we want to apply custom Bootstrap validation styles to
    var forms = document.getElementsByClassName('needs-validation');
    // Loop over them and prevent submission
    var validation = Array.prototype.filter.call(forms, function(form) {
      form.addEventListener('submit', function(event) {
        if (form.checkValidity() === false) {
          event.preventDefault();
          event.stopPropagation();
        }
        form.classList.add('was-validated');
      }, false);
    });
  }, false);
})();
</script>

























 
