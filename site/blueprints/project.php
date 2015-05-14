<?php if(!defined('KIRBY')) exit ?>

title: Project
pages: false
files:
  sortable: true
  fields:
    title:
      label: Image Title
      type: text
    caption:
      label: Caption
      type: textarea

fields:
  title:
    label: Project Name
    type:  text
  text:
    label: Description
    type:  textarea
  thumbnail:
    label: Thumbnail Image
    type: select
    options: query
    query:
      fetch: images
      text: '{{title}}'
      value: '{{filename}}'
  color:
    label: Project Highlight Color
    type: color