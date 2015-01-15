<header class="frame">
    <div class="bit-2">
        <?=img('images/assets/header.png');?>
    </div>
    <div class="bit-5 header-details">
        <h2>BOLET&Iacute;N AXA</h2>
        <h3>{mes} {anio} <strong>N. {numero}</strong></h3>
        <p>Consulta los n&uacute;meros anteriores <?=anchor('http://www.boletinaxa.com.mx/anterior/historico.html', img('images/assets/btn_landing.png'));?></p>
    </div>
</header>
<nav class="frame">
    <ul>
        <li><?=anchor('/', 'INICIO');?></li>
        <li><?=anchor('2014/octubre/salud', 'TU SALUD');?></li>
        <li><?=anchor('2014/octubre/futuro', 'TU FUTURO');?></li>
        <li><?=anchor('2014/octubre/auto', 'TU AUTO');?></li>
        <li><?=anchor('2014/octubre/hogar', 'TU HOGAR');?></li>
        <li><?=anchor('opinion?email='.$this->session->userdata('email'), 'TU OPINI&Oacute;N');?></li>
    </ul>
</nav>

<div class="container">
    <?=($this->session->flashdata('msg') ? '<p style="color:red;font-size:.8em;">'.$this->session->flashdata('msg').'</p>' : '');?>
<table border="0" cellpadding="0" cellspacing="0" class="apps-table">
	<tr>
		<td colspan="3">
			<img src="<?=base_url('images/assets/BANNER-APPS_02.png');?>" alt=""></td>
	</tr>
	<tr>
		<td colspan="3">
			<img src="<?=base_url('images/assets/BANNER-APPS_03.png');?>" alt=""></td>
	</tr>
	<tr>
		<td colspan="3">
			<img src="<?=base_url('images/assets/BANNER-APPS_04.png');?>" alt=""></td>
	</tr>
	<tr>
		<td colspan="3">
			<img src="<?=base_url('images/assets/BANNER-APPS_05.png');?>" alt=""></td>
	</tr>
	<tr>
		<td>
			<img src="<?=base_url('images/assets/BANNER-APPS_06.png');?>" alt=""></td>
		<td colspan="2" class="buttons">
			<?=anchor('https://itunes.apple.com/mx/app/axa-te-acompana/id452501335?mt=8', img('images/assets/ios_app_store.png'), array('target'=>'_blank'));?><br />
            <?=anchor('https://play.google.com/store/apps/details?id=com.axa.android.smartclaims.mx&hl=es_419', img('images/assets/android_app_store.png'), array('target'=>'_blank'));?>
        </td>
	</tr>
	<tr>
		<td colspan="3">
			<img src="<?=base_url('images/assets/BANNER-APPS_08.png');?>" alt=""></td>
	</tr>
	<tr>
		<td colspan="3">
			<img src="<?=base_url('images/assets/BANNER-APPS_09.png');?>" alt=""></td>
	</tr>
	<tr>
		<td colspan="3">
			<img src="<?=base_url('images/assets/BANNER-APPS_10.png');?>" alt=""></td>
	</tr>
	<tr>
		<td colspan="2">
			<img src="<?=base_url('images/assets/BANNER-APPS_11.png');?>" alt=""></td>
        <td colspan="2" class="buttons">
            <?=anchor('https://itunes.apple.com/es/app/axa-mylife-mx/id868197990?mt=8', img('images/assets/ios_app_store.png'), array('target'=>'_blank'));?><br />
            <?=anchor('https://play.google.com/store/apps/details?id=com.dmsti.axa.axamylifeMX', img('images/assets/android_app_store.png'), array('target'=>'_blank'));?>
        </td>
	</tr>
	<tr>
		<td colspan="3">
			<img src="<?=base_url('images/assets/BANNER-APPS_13.png');?>" alt=""></td>
	</tr>
	<tr>
		<td colspan="3">
			<img src="<?=base_url('images/assets/BANNER-APPS_14.png');?>" alt=""></td>
	</tr>
	<tr>
		<td colspan="3">
			<img src="<?=base_url('images/assets/BANNER-APPS_15.png');?>" alt=""></td>
	</tr>
	<tr>
		<td colspan="2">
			<img src="<?=base_url('images/assets/BANNER-APPS_16.png');?>" alt=""></td>
        <td colspan="2" class="buttons">
            <?=anchor('https://itunes.apple.com/us/app/axa-vial-mx/id874203539?l=es&ls=1&mt=8', img('images/assets/ios_app_store.png'), array('target'=>'_blank'));?><br />
            <?=anchor('https://play.google.com/store/apps/details?id=com.axa.assistance.mexico', img('images/assets/android_app_store.png'), array('target'=>'_blank'));?>
        </td>
	</tr>
	<tr>
		<td colspan="3">
			<img src="<?=base_url('images/assets/BANNER-APPS_18.png');?>" alt=""></td>
	</tr>
</table>