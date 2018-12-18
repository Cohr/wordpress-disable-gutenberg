<?php
/**
 * Plugin Name: Disable Gutenberg
 * Plugin URI: https://www.github.com/Cohr/wordpress-disable-gutenberg
 * GitHub URI: Cohr/wordpress-disable-gutenberg
 * Description: WordPress 5.0+ utilises a new content editor: Gutenberg. This plugin reenables the original content editor.
 * Version:     1.0.0
 * Author:      Cohr
 * Author URI:  https://cohr.nz
 *
 *  MIT License
 *
 *  Copyright (c) 2018 Cohr
 *
 *  Permission is hereby granted, free of charge, to any person obtaining a copy
 *  of this software and associated documentation files (the "Software"), to deal
 *  in the Software without restriction, including without limitation the rights
 *  to use, copy, modify, merge, publish, distribute, sublicense, and/or sell
 *  copies of the Software, and to permit persons to whom the Software is
 *  furnished to do so, subject to the following conditions:

 *  The above copyright notice and this permission notice shall be included in all
 *  copies or substantial portions of the Software.

 *  THE SOFTWARE IS PROVIDED "AS IS", WITHOUT WARRANTY OF ANY KIND, EXPRESS OR
 *  IMPLIED, INCLUDING BUT NOT LIMITED TO THE WARRANTIES OF MERCHANTABILITY,
 *  FITNESS FOR A PARTICULAR PURPOSE AND NONINFRINGEMENT. IN NO EVENT SHALL THE
 *  AUTHORS OR COPYRIGHT HOLDERS BE LIABLE FOR ANY CLAIM, DAMAGES OR OTHER
 *  LIABILITY, WHETHER IN AN ACTION OF CONTRACT, TORT OR OTHERWISE, ARISING FROM,
 *  OUT OF OR IN CONNECTION WITH THE SOFTWARE OR THE USE OR OTHER DEALINGS IN THE
 *  SOFTWARE.
 *
 * @package    DisableGutenberg
 * @since      1.0.0
 * @copyright  Copyright (c) 2018, Sam Parkin
 * @license    MIT
 */

// Disable Gutenberg
add_filter( 'gutenberg_can_edit_post_type', '__return_false' );
add_filter( 'use_block_editor_for_post_type', '__return_false' );
