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

class FrontController extends FrontControllerCore
{
    /**
     * {@inheritDoc}
     */
    public function display()
    {
        parent::display();

        // if template debugging is activated
        if (Configuration::get('TEMPLATEDEBUG_ENABLED', false)) {

            // get template listing and create debug view
            $debug_templates = $this->context->smarty->debug_templates;
            $this->context->smarty->assign(array(
                'debug_templates' => $debug_templates
            ));
            $this->smartyOutputContent(_PS_MODULE_DIR_.'templatedebug/views/templates/front/template_debug.tpl');
        }

        return true;
    }
}
