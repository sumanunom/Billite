<?php $this->load->helper('country'); ?>

<span class="client-address-street-line">
    <?php echo($client->client_address_1 ? htmlsc($client->client_address_1) : ''); ?>
    <?php echo($client->client_country ? '<br>' . get_country_name(trans('cldr'), $client->client_country) : ''); ?>
</span>
