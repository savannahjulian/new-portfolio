<?php if(!defined('KIRBY')) exit ?>

title: Site
pages: true
files: true
fields:
  core:
    label: Core Settings
    type: headline
  title:
    label: Title
    type:  text
  author:
    label: Author
    type:  text
  description:
    label: Description
    type: textarea
    buttons: false
    help: Try and keep to about 140 characters, because this will be used for the Description Meta tag when a page doesn't include its own excerpt.
  keywords:
    label: Keywords
    type: text
    help: Separate keywords with a comma
  copyright:
    label: Copyright Information
    type: text

  about:
    label: About
    type: headline
  artist_statement:
    label: About the Artist
    type: textarea
  experience:
    label: Experience
    type: textarea
    help: This ought to be a list— the space is limited!
  skills:
    label: Skills and Interests
    type: textarea
  elsewhere:
    label: External Links
    type: structure
    entry: >
      <a href="{{link}}">{{name}}</a>
      <p style="font-style: italic">{{notes}}</p>
    fields:
      name:
        label: Link Label
        type: text
      link:
        label: URL
        type: url
      notes:
        label: Notes
        type: textarea