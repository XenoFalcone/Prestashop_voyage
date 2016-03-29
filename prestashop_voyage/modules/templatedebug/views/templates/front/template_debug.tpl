{*
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
*}
<div id="template_debug" class="bootstrap" style="padding: 30px;">
    <div class="row">
        <div class="col-12">
            <h2>Included Templates</h2>
            <table class="table table-condensed">
                <tbody>
                    <tr><th>#</th><th>Filename</th><tr>
                    {foreach $debug_templates as $debug_template}
                        <tr><td>{$debug_template@iteration|escape:'htmlall':'UTF-8'}</td><td>{$debug_template|escape:'htmlall':'UTF-8'}</td></tr>
                    {/foreach}
                </tbody>
            </table>
        </div>
    </div>
</div>