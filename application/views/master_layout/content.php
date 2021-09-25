<?php

$data['url'] = base_url();

$this->parser->parse('master_layout/header', $data);
$this->parser->parse($template, $data);
$this->parser->parse('master_layout/footer', $data);