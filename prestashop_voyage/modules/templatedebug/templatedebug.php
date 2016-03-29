<?php
/**
 * NOTICE OF LICENSE
 * 
 * This program is free software: you can redistribute it and/or modify
 * it under the terms of the GNU General Public License as published by
 * the Free Software Foundation, either version 3 of the License, or
 * (at your option) any later version.
 * 
 * This program is distributed in the hope that it will be useful,
 * but WITHOUT ANY WARRANTY; without even the implied warranty of
 * MERCHANTABILITY or FITNESS FOR A PARTICULAR PURPOSE.  See the
 * GNU General Public License for more details.
 * 
 * You should have received a copy of the GNU General Public License
 * along with this program.  If not, see <http://www.gnu.org/licenses/>.
 *
 * @author    Loïc Sapone <loic@sapone.fr>
 * @copyright 2016 Loïc Sapone
 * @license   http://www.gnu.org/licenses/gpl.html GNU General Public License (GNU GPL 3.0)
 */

if (!defined('_PS_VERSION_')) {
    exit;
}

class Templatedebug extends Module
{
    protected $config_form = false;

    public function __construct()
    {
        $this->name = 'templatedebug';
        $this->tab = 'others';
        $this->version = '0.3.0';
        $this->author = 'Loïc Sapone';
        $this->need_instance = 0;

        /**
         * Set $this->bootstrap to true if your module is compliant with bootstrap (PrestaShop 1.6)
         */
        $this->bootstrap = true;

        parent::__construct();

        $this->displayName = $this->l('Template Debug');
        $this->description = $this->l('Template debug module');

        $this->ps_versions_compliancy = array('min' => '1.6', 'max' => _PS_VERSION_);
    }

    /**
     * Insert module into datable
     * 
     * @return bool
     */
    public function install()
    {
        return parent::install();
    }

    /**
     * Delete module from datable
     *
     * @return bool
     */
    public function uninstall()
    {
        return parent::uninstall();
    }
    
    /**
     * Load the configuration form
     * 
     * @return string
     */
    public function getContent()
    {
        $output = '';
        
        if (((bool)Tools::isSubmit('submitTemplatedebugModule')) == true) {
            $this->postProcess();
            $output .= $this->displayConfirmation($this->l('Settings updated'));
        }
        
        return $output.$this->renderForm();
    }
    
    /**
     * Create the form that will be displayed in the configuration of your module
     * 
     * @return string
     */
    protected function renderForm()
    {
        $helper = new HelperForm();

        $helper->show_toolbar = false;
        $helper->table = $this->table;
        $helper->module = $this;
        $helper->default_form_language = $this->context->language->id;
        $helper->allow_employee_form_lang = Configuration::get('PS_BO_ALLOW_EMPLOYEE_FORM_LANG', 0);

        $helper->identifier = $this->identifier;
        $helper->submit_action = 'submitTemplatedebugModule';
        $helper->currentIndex = $this->context->link->getAdminLink('AdminModules', false)
            .'&configure='.$this->name.'&tab_module='.$this->tab.'&module_name='.$this->name;
        $helper->token = Tools::getAdminTokenLite('AdminModules');

        $helper->tpl_vars = array(
            'fields_value' => $this->getConfigFormValues(), /* Add values for your inputs */
            'languages' => $this->context->controller->getLanguages(),
            'id_language' => $this->context->language->id,
        );

        return $helper->generateForm(array($this->getConfigForm()));
    }

    /**
     * Create the structure of your form
     * 
     * @return array
     */
    protected function getConfigForm()
    {
        return array(
            'form' => array(
                'legend' => array(
                'title' => $this->l('Settings'),
                'icon' => 'icon-cogs',
                ),
                'input' => array(
                    array(
                        'type' => 'switch',
                        'label' => $this->l('Enable template debugging'),
                        'name' => 'TEMPLATEDEBUG_ENABLED',
                        'is_bool' => true,
                        'values' => array(
                            array(
                                'id' => 'enable',
                                'value' => true,
                                'label' => $this->l('Enable')
                            ),
                            array(
                                'id' => 'disable',
                                'value' => false,
                                'label' => $this->l('Disable')
                            )
                        ),
                    ),
                ),
                'submit' => array(
                    'title' => $this->l('Save'),
                ),
            ),
        );
    }

    /**
     * Set values for the inputs
     * 
     * @return array
     */
    protected function getConfigFormValues()
    {
        return array(
            'TEMPLATEDEBUG_ENABLED' => Configuration::get('TEMPLATEDEBUG_ENABLED', false),
        );
    }

    /**
     * Save form data
     */
    protected function postProcess()
    {
        $form_values = $this->getConfigFormValues();

        foreach (array_keys($form_values) as $key) {
            Configuration::updateValue($key, Tools::getValue($key));
        }
    }
}
