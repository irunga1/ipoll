<div class="container">
    <div class="row-">
        <div class="col-md-2">
            <img src="" alt="">
            <p>Esta pantalla es para generar validar y enviar codigos para las encuestas.</p>
        </div>
        <div class="col-md-8">
            
            <?php 
                $attributes = array('class' => 'email', 'id' => 'myform');
                echo form_open('email/send', $attributes); 
            ?>
            <div class="row">
                <label for="code" class = "formLabel col-xs-2">Codigo</label>
                <?php
                $data = array(
                    'name'          => 'code',
                    'id'            => 'code',
                    'value'         => $codigo,
                    'class'         => 'col-xs-6 form-control',
                    'readonly'     => 'readonly'
                );
                echo form_input($data);
                ?>
            </div>
            <div class="row">
            <label for="code" class = "formLabel col-xs-2">Seleccione Cuestionario</label>
            <?php
            $options = array(
                    'small'         => 'Small Shirt',
                    'med'           => 'Medium Shirt',
                    'large'         => 'Large Shirt',
                    'xlarge'        => 'Extra Large Shirt',
            );
            $props = array(
                'name'          => 'tipo',
                'id'            => 'tipo_cuestionario',                
                'class'         => 'col-xs-6 form-control',
                
            );
            $shirts_on_sale = array('small', 'large');
            echo form_dropdown('shirts', $options, 'large',$props);
            ?>
            </div>


            <?php echo form_close(); ?>
        </div>
        <div class="col-md-2">
            <img src="" alt="">
            <label for="">ccc</label>
        </div>
    </div>
</div>

<style>
    .form-control{
        width:auto!important;
    }
    .formLabel{
        color:#000;
        font-size:14px;
        font-weight:700;
    }
</style>