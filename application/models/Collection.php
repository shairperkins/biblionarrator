<?php
/* Copyright (c) 2013 C & P Bibliography Services
 *
 * This file is part of Biblionarrator.
 *
 * Biblionarrator is free software: you can redistribute it and/or modify
 * it under the terms of the GNU Affero General Public License as
 * published by the Free Software Foundation, either version 3 of the
 * License, or (at your option) any later version.
 * 
 * This program is distributed in the hope that it will be useful,
 * but WITHOUT ANY WARRANTY; without even the implied warranty of
 * MERCHANTABILITY or FITNESS FOR A PARTICULAR PURPOSE.  See the
 * GNU Affero General Public License for more details.
 * 
 * You should have received a copy of the GNU Affero General Public License
 * along with this program. If not, see <http://www.gnu.org/licenses/>.
 */
class Collection extends Eloquent
{
    public static $timestamps = true;

    public function records() {
        return $this->has_many('Record', 'collection_id');
    }

    public function users() {
        return $this->has_many('User', 'collection_id');
    }

    public function templates() {
        return $this->has_many('Template', 'collection_id');
    }


    public function settings() {
        return $this->has_many('CollectionSettings', 'collection_id');
    }
}
