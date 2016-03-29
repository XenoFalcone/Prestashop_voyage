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

class SmartyCustom extends SmartyCustomCore
{
    public $debug_templates = array();
    
    /**
     * {@inheritDoc}
     */
    public function createTemplate($template, $cache_id = null, $compile_id = null, $parent = null, $do_clone = true)
    {
        // if template debugging is activated
        if (Configuration::get('TEMPLATEDEBUG_ENABLED', false)) {
            
            // add template full path
            $this->debug_templates[] = $template;
        }
        
        // get template object
        $tpl = parent::createTemplate($template, $cache_id, $compile_id, $parent, $do_clone);
        
        // if template debugging is activated
        if (Configuration::get('TEMPLATEDEBUG_ENABLED', false)) {
            
            // get template directory path if exist
            $template_dir = null;
            if (array_key_exists('tpl_dir', $tpl->smarty->tpl_vars)) {
                $template_dir = $tpl->smarty->tpl_vars['tpl_dir']->value;
            }
            
            // there is no event with smarty include, so we scan file content
            $tpl_content = Tools::file_get_contents($tpl->template_resource);
            $pattern = '{include file="([^"]*)"([^\}]*)?}';
            $include_matches = array();

            // if match pattern
            if (preg_match_all($pattern, $tpl_content, $include_matches)) {

                // get the files name
                $include_files = $include_matches[1];

                foreach ($include_files as $include_file) {
                    $file_matches = array();

                    // if the file name has smarty variables, we try to replace it with the value of this variable
                    if (preg_match('(\$[a-z_]+)', $include_file, $file_matches)) {
                        $variable = $file_matches[0];
                        $variable_name = ltrim($variable, '$');

                        // if variable value existe in template's smarty variables
                        if (array_key_exists($variable_name, $tpl->smarty->tpl_vars)) {
                            $variable_value = $tpl->smarty->tpl_vars[$variable_name]->value;

                            // replace it only if string value
                            if (is_string($variable_value)) {
                                $include_file = str_replace($variable, $variable_value, $include_file);
                            }
                        }
                    }
                    
                    // clean path
                    $include_file = str_replace("/./", "/", $include_file);
                    if ($template_dir !== null) {
                        $include_file = str_replace('./', $template_dir, $include_file);
                    }
                    
                    $this->debug_templates[] = $include_file;
                }
            }
            
            // get smarty data
            if ($parent !== null) {
                
                // get the smarty local variables
                $tpl_vars = $parent->tpl_vars;
                
                // find unkown variable in template list
                foreach ($this->debug_templates as $key => $template) {
                    $variable_matches = array();
                    
                    // if the file name has smarty variables, we try to replace it with the value of this variable
                    if (preg_match('(\$[a-z_]+)', $template, $variable_matches)) {
                        $variable = $variable_matches[0];
                        $variable_name = ltrim($variable, '$');
                        
                        // if variable value existe in template's smarty variables
                        if (array_key_exists($variable_name, $tpl_vars)) {
                            $variable_value = $tpl_vars[$variable_name]->value;
                            
                            // replace it only if string value
                            if (is_string($variable_value)) {
                                $template = str_replace($variable, $variable_value, $template);
                                $this->debug_templates[$key] = $template;
                            }
                        }
                    }
                }
            }
        }
        
        return $tpl;
    }
}
