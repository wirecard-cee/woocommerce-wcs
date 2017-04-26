<?php
/**
 * Shop System Plugins - Terms of Use
 *
 * The plugins offered are provided free of charge by Wirecard Central Eastern Europe GmbH
 * (abbreviated to Wirecard CEE) and are explicitly not part of the Wirecard CEE range of
 * products and services.
 *
 * They have been tested and approved for full functionality in the standard configuration
 * (status on delivery) of the corresponding shop system. They are under General Public
 * License Version 2 (GPLv2) and can be used, developed and passed on to third parties under
 * the same terms.
 *
 * However, Wirecard CEE does not provide any guarantee or accept any liability for any errors
 * occurring when used in an enhanced, customized shop system configuration.
 *
 * Operation in an enhanced, customized configuration is at your own risk and requires a
 * comprehensive test phase by the user of the plugin.
 *
 * Customers use the plugins at their own risk. Wirecard CEE does not guarantee their full
 * functionality neither does Wirecard CEE assume liability for any disadvantages related to
 * the use of the plugins. Additionally, Wirecard CEE does not guarantee the full functionality
 * for customized shop systems or installed plugins of other vendors of plugins within the same
 * shop system.
 *
 * Customers are responsible for testing the plugin's functionality before starting productive
 * operation.
 *
 * By installing the plugin into the shop system the customer agrees to these terms of use.
 * Please do not use the plugin if you do not agree to these terms of use!
 */

/**
 * Class WC_Gateway_Wirecard_Checkout_Seamless_Admin
 */
class WC_Gateway_Wirecard_Checkout_Seamless_Admin {

	/**
	 * Handles form output for admin panel
	 *
	 * @param $gateway
	 *
	 * @since 1.0.0
	 */
	function print_admin_form_fields($gateway){
		?>
		<link rel='stylesheet'
		      href='<?= plugins_url( 'woocommerce-wirecard-checkout-seamless/assets/styles/admin.css' ) ?>'>
		<script src='<?= plugins_url( 'woocommerce-wirecard-checkout-seamless/assets/scripts/admin.js' ) ?>'></script>

		<h3><?php echo ( ! empty( $gateway->method_title ) ) ? $gateway->method_title : __( 'Settings',
				'woocommerce-wirecard-checkout-seamless' ); ?></h3>
		<div class="woo-wcs-settings-header-wrapper">
			<img src="<?= plugins_url( 'woocommerce-wirecard-checkout-seamless/assets/images/wirecard-logo.png' ) ?>">
			<p><?= __( 'Wirecard - Your Full Service Payment Provider - Comprehensive solutions from one single source',
					'woocommerce-wirecard-checkout-seamless' ) ?></p>

			<p><?= __( 'Wirecard is one of the world´s leading providers of outsourcing and white label solutions for electronic payment transactions.',
					'woocommerce-wirecard-checkout-seamless' ) ?></p>

			<p><?= __( 'As independent provider of payment solutions, we accompany our customers along the entire business development. Our payment solutions are perfectly tailored to suit e-Commerce requirements and have made	us Austria´s leading payment service provider. Customization, competence, and commitment.',
					'woocommerce-wirecard-checkout-seamless' ) ?></p>


		</div>
		<nav class="nav-tab-wrapper woo-nav-tab-wrapper wcs-tabs">
			<a href="javascript:void(0);" data-target="#basicdata" class="nav-tab nav-tab-active"><?= __( 'Access data',
					'woocommerce-wirecard-checkout-seamless' ) ?></a>
			<a href="javascript:void(0);" data-target="#options" class="nav-tab "><?= __( 'General settings',
					'woocommerce-wirecard-checkout-seamless' ) ?></a>
			<a href="javascript:void(0);" data-target="#creditcardoptions" class="nav-tab "><?= __( 'Credit card',
					'woocommerce-wirecard-checkout-seamless' ) ?></a>
			<a href="javascript:void(0);" data-target="#invoiceoptions" class="nav-tab "><?= __( 'Invoice',
					'woocommerce-wirecard-checkout-seamless' ) ?></a>
			<a href="javascript:void(0);" data-target="#installmentoptions" class="nav-tab "><?= __( 'Installment',
					'woocommerce-wirecard-checkout-seamless' ) ?></a>
			<a href="javascript:void(0);" data-target="#standardpayments" class="nav-tab "><?= __( 'Standard payments',
					'woocommerce-wirecard-checkout-seamless' ) ?></a>
			<a href="javascript:void(0);" data-target="#bankingpayments" class="nav-tab "><?= __( 'Banking payments',
					'woocommerce-wirecard-checkout-seamless' ) ?></a>
			<a href="javascript:void(0);" data-target="#alternativepayments"
			   class="nav-tab "><?= __( 'Alternative payments', 'woocommerce-wirecard-checkout-seamless' ) ?></a>
			<a href="javascript:void(0);" data-target="#mobilepayments" class="nav-tab "><?= __( 'Mobile payments',
					'woocommerce-wirecard-checkout-seamless' ) ?></a>
			<a href="javascript:void(0);" data-target="#voucherpayments" class="nav-tab "><?= __( 'Voucher payments',
					'woocommerce-wirecard-checkout-seamless' ) ?></a>
		</nav>
		<div class="tab-content panel">
			<div class="tab-pane active" id="basicdata">
				<table><?= $gateway->generate_settings_html( $this->get_settings_fields( 'basicdata' ), false ); ?></table>
			</div>
			<div class="tab-pane" id="options">
				<table><?= $gateway->generate_settings_html( $this->get_settings_fields( 'options' ), false ); ?></table>
			</div>
			<div class="tab-pane" id="creditcardoptions">
				<table><?= $gateway->generate_settings_html( $this->get_settings_fields( 'creditcardoptions' ),
						false ); ?></table>
			</div>
			<div class="tab-pane" id="invoiceoptions">
				<table><?= $gateway->generate_settings_html( $this->get_settings_fields( 'invoiceoptions' ),
						false ); ?></table>
			</div>
			<div class="tab-pane" id="installmentoptions">
				<table><?= $gateway->generate_settings_html( $this->get_settings_fields( 'installmentoptions' ),
						false ); ?></table>
			</div>
			<div class="tab-pane" id="standardpayments">
				<table><?= $gateway->generate_settings_html( $this->get_settings_fields( 'standardpayments' ),
						false ); ?></table>
			</div>
			<div class="tab-pane" id="bankingpayments">
				<table><?= $gateway->generate_settings_html( $this->get_settings_fields( 'bankingpayments' ),
						false ); ?></table>
			</div>
			<div class="tab-pane" id="alternativepayments">
				<table><?= $gateway->generate_settings_html( $this->get_settings_fields( 'alternativepayments' ),
						false ); ?></table>
			</div>
			<div class="tab-pane" id="mobilepayments">
				<table><?= $gateway->generate_settings_html( $this->get_settings_fields( 'mobilepayments' ),
						false ); ?></table>
			</div>
			<div class="tab-pane" id="voucherpayments">
				<table><?= $gateway->generate_settings_html( $this->get_settings_fields( 'voucherpayments' ),
						false ); ?></table>
			</div>
		</div>
		<?php
	}

	/**
	 * Get all or the corresponding settings fields group
	 *
	 * @param string $which
	 *
	 * @since 1.0.0
	 * @return array
	 */
	function get_settings_fields( $which = null ) {
		include "includes/form_fields.php";
		if ( $which !== null ) {
			return $fields[ $which ];
		}

		return $fields;
	}

}