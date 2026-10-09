<?php
// This file is part of Moodle - https://moodle.org/
//
// Moodle is free software: you can redistribute it and/or modify
// it under the terms of the GNU General Public License as published by
// the Free Software Foundation, either version 3 of the License, or
// (at your option) any later version.
//
// Moodle is distributed in the hope that it will be useful,
// but WITHOUT ANY WARRANTY; without even the implied warranty of
// MERCHANTABILITY or FITNESS FOR A PARTICULAR PURPOSE.  See the
// GNU General Public License for more details.
//
// You should have received a copy of the GNU General Public License
// along with Moodle.  If not, see <https://www.gnu.org/licenses/>.

/**
 * Search4all block.
 *
 * @package    block_search4all
 * @copyright  2026 Moodle Plugin Lab
 * @license    https://www.gnu.org/copyleft/gpl.html GNU GPL v3 or later
 */

/**
 * Search4all block definition.
 */
class block_search4all extends block_base {
    /**
     * Set the block title.
     */
    public function init(): void {
        $this->title = get_string('pluginname', 'block_search4all');
    }

    /**
     * Return the block content.
     *
     * @return stdClass|null
     */
    public function get_content(): ?stdClass {
        if ($this->content !== null) {
            return $this->content;
        }

        $this->content = new stdClass();
        $this->content->text = get_string('description', 'block_search4all');
        $this->content->footer = '';
        return $this->content;
    }
}
