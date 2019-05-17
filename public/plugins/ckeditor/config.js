/**
 * @license Copyright (c) 2003-2019, CKSource - Frederico Knabben. All rights reserved.
 * For licensing, see https://ckeditor.com/legal/ckeditor-oss-license
 */

CKEDITOR.editorConfig = function(config) {
  config.language = 'vi';
  config.height = 300;
  config.width = "auto";
  config.toolbarCanCollapse = true;
  config.entities = false;
  config.removePlugins = 'image';
  config.extraPlugins = 'youtube,autogrow,image2,codesnippet';
  config.youtube_width = '100%';
  config.youtube_height = 'auto';
  config.youtube_responsive = true;
  config.codeSnippet_theme = $hlTheme;
  config.image2_captionedClass = 'img-responsive';
};
