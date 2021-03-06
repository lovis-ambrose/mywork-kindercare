<style>
    .button1{
        background-color: lightseagreen;
        color: white;
        height: 34px;
        width: 75px;
        border-radius: 15px;
        border-color: green;
        shadow: none;
        font-weight: bold;
    }
    .button2{
        background-color: mediumseagreen;
        color: white;
        height: 34px;
        width: 75px;
        border-radius: 15px;
        border-color: green;
        shadow: none;
        font-weight: bold;
    }
    .button3{
        background-color: seagreen;
        color: white;
        height: 34px;
        width: 85px;
        border-radius: 15px;
        border-color: green;
        shadow: none;
        font-weight: bold;
    }
    .button4{
        background-color: lightseagreen;
        color: white;
        height: 40px;
        width: 100px;
        border-radius: 5px;
        border-color: lightseagreen;
        shadow: none;
        font-weight: bold
    }
</style>

<div class="form-group">
    <label for="first_name" class="control-label"><?php echo e('First Name'); ?></label>
    <input class="form-control" name="first_name" type="text" id="first_name" value="<?php echo e(isset($pupil->first_name) ? $pupil->first_name : ''); ?>" >
</div>
<div class="form-group">
    <label for="last_name" class="control-label"><?php echo e('Last Name'); ?></label>
    <input class="form-control" name="last_name" type="text" id="last_name" value="<?php echo e(isset($pupil->last_name) ? $pupil->last_name : ''); ?>" >
</div>
<div class="form-group">
    <label for="phone_number" class="control-label"><?php echo e('Phone Number'); ?></label>
    <input class="form-control" name="phone_number" type="text" id="phone_number" value="<?php echo e(isset($pupil->phone_number) ? $pupil->phone_number : ''); ?>" >
</div>
<div class="form-group">
    <label for="user_code" class="control-label"><?php echo e('User Code'); ?></label>
    <input class="form-control" name="user_code" type="text" id="user_code" value="<?php echo e(isset($pupil->user_code) ? $pupil->user_code : ''); ?>" >
</div>
<div class="form-group">
    <input class="button4" type="submit" value="<?php echo e($formMode === 'edit' ? 'Update' : 'Create'); ?>">
</div><?php /**PATH /home/lovis/Music/Kindercare/mywork-kindercare/resources/views/admin/pupils/form.blade.php ENDPATH**/ ?>