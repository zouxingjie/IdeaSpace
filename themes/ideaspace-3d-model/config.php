<?php

return [

  '#theme-name' => 'IdeaSpace 3D Model',
  '#theme-key' => 'ideaspace-3d-model',
  '#theme-version' => '1.2',
  '#ideaspace-version' => '>=1.1.0',
  '#theme-description' => '3D model viewer with info hotspots. Attach text annotations to hotspots.',
  '#theme-author-name' => 'IdeaSpaceVR',
  '#theme-author-email' => 'info@ideaspacevr.org',
  '#theme-homepage' => 'https://www.ideaspacevr.org/themes',
  '#theme-keywords' => 'model, 3d model, mobile',
  '#theme-view' => 'scene',

  '#content-types' => [

    'annotations' => [
      '#label' => 'Hotspot Annotation',
      '#description' => 'Manage your hotspot annotations.',
      '#max-values' => 'infinite',
      '#fields' => [

        'text' => [
          '#label' => 'Text',
          '#description' => 'Enter some text.',
          '#help' => 'Enter some text.',
          '#type' => 'textarea',
          '#maxlength' => 700, 
          '#rows' => 10, 
          '#contentformat' => 'html/text', 
          '#required' => true,
        ],

        'text-color' => [
          '#label' => 'Text Color for Annotation Text Boxes',
          '#description' => 'Select a text color.',
          '#help' => 'Select a text color.',
          '#type' => 'color',
          '#required' => false,
          '#default_value' => '#FFFFFF',
        ],

        'background-color' => [
          '#label' => 'Background Color for Annotation Text Boxes',
          '#description' => 'Select a background color.',
          '#help' => 'Select a background color.',
          '#type' => 'color',
          '#required' => false,
          '#default_value' => '#000000',
        ],

        'hotspot-color' => [
          '#label' => 'Hotspot Color',
          '#description' => 'Select a hotspot color.',
          '#help' => 'Select a hotspot color.',
          '#type' => 'color',
          '#required' => false,
          '#default_value' => '#FFFFFF',
        ],

      ], /* fields */

    ], /* annotations */

    'model' => [
      '#label' => '3D Model',
      '#description' => 'Manage your 3D model.',
      '#max-values' => '1',
      '#fields' => [

        'model' => [
          '#label' => 'Model',
          '#description' => 'Upload a 3D model.',
          '#help' => 'Upload a 3D model.',
          '#type' => 'model3d',
          '#required' => true,
          '#file-extension' => ['obj', 'ply', 'dae', 'gltf', 'glb'],
        ],

        'vrscale' => [
          '#label' => 'Model Scale in VR',
          '#description' => 'Select a scale value.',
          '#help' => 'The scale value is applied when the model is viewed in VR.',
          '#type' => 'options-select',
          '#options' => [
              '0.01 0.01 0.01' => '0.01',
              '0.02 0.02 0.02' => '0.02',
              '0.03 0.03 0.03' => '0.03',
              '0.04 0.04 0.04' => '0.04',
              '0.05 0.05 0.05' => '0.05',
              '0.06 0.06 0.06' => '0.06',
              '0.07 0.07 0.07' => '0.07',
              '0.08 0.08 0.08' => '0.08',
              '0.09 0.09 0.09' => '0.09',
              '0.10 0.10 0.10' => '0.10',
              '0.12 0.12 0.12' => '0.12',
              '0.14 0.14 0.14' => '0.14',
              '0.16 0.16 0.16' => '0.16',
              '0.18 0.18 0.18' => '0.18',
              '0.20 0.20 0.20' => '0.20',
              '0.25 0.25 0.25' => '0.25',
              '0.30 0.30 0.30' => '0.30',
              '0.35 0.35 0.35' => '0.35',
              '0.40 0.40 0.40' => '0.40',
              '0.45 0.45 0.45' => '0.45',
              '0.50 0.50 0.50' => '0.50',
              '0.55 0.55 0.55' => '0.55',
              '0.60 0.60 0.60' => '0.60',
              '0.65 0.65 0.65' => '0.65',
              '0.70 0.70 0.70' => '0.70',
              '0.75 0.75 0.75' => '0.75',
              '0.80 0.80 0.80' => '0.80',
              '0.85 0.85 0.85' => '0.85',
              '0.90 0.90 0.90' => '0.90',
              '0.95 0.95 0.95' => '0.95',
              '1.00 1.00 1.00' => '1.00',
              '1.10 1.10 1.10' => '1.10',
              '1.20 1.20 1.20' => '1.20',
              '1.30 1.30 1.30' => '1.30',
              '1.40 1.40 1.40' => '1.40',
              '1.50 1.50 1.50' => '1.50',
              '1.60 1.60 1.60' => '1.60',
              '1.70 1.70 1.70' => '1.70',
              '1.80 1.80 1.80' => '1.80',
              '1.90 1.90 1.90' => '1.90',
              '2.00 2.00 2.00' => '2.00',
              '3.00 3.00 3.00' => '3.00',
              '4.00 4.00 4.00' => '4.00',
              '5.00 5.00 5.00' => '5.00'
          ],
          '#required' => false,
        ],

        'vr-model-y-axis' => [
          '#label' => 'Model Level in VR',
          '#description' => 'Select a value.',
          '#help' => 'Select a value to raise (+) or lower (-) the model when viewed in VR.',
          '#type' => 'options-select',
          '#options' => [
              '-10.0' => '-10.0',
              '-9.5' => '-9.5',
              '-9.0' => '-9.0',
              '-8.5' => '-8.5',
              '-8.0' => '-8.0',
              '-7.5' => '-7.5',
              '-7.0' => '-7.0',
              '-6.5' => '-6.5',
              '-6.0' => '-6.0',
              '-5.5' => '-5.5',
              '-5.0' => '-5.0',
              '-4.5' => '-4.5',
              '-4.0' => '-4.0',
              '-3.5' => '-3.5',
              '-3.0' => '-3.0',
              '-2.5' => '-2.5',
              '-2.0' => '-2.0',
              '-1.9' => '-1.9',
              '-1.8' => '-1.8',
              '-1.7' => '-1.7',
              '-1.6' => '-1.6',
              '-1.5' => '-1.5',
              '-1.4' => '-1.4',
              '-1.3' => '-1.3',
              '-1.2' => '-1.2',
              '-1.1' => '-1.1',
              '-1.0' => '-1.0',
              '-0.9' => '-0.9',
              '-0.8' => '-0.8',
              '-0.7' => '-0.7',
              '-0.6' => '-0.6',
              '-0.5' => '-0.5',
              '-0.4' => '-0.4',
              '-0.3' => '-0.3',
              '-0.2' => '-0.2',
              '-0.1' => '-0.1',
              '0.0' => '0.0',
              '0.1' => '0.1',
              '0.2' => '0.2',
              '0.3' => '0.3',
              '0.4' => '0.4',
              '0.5' => '0.5',
              '0.6' => '0.6',
              '0.7' => '0.7',
              '0.8' => '0.8',
              '0.9' => '0.9',
              '1.0' => '1.0',
              '1.1' => '1.1',
              '1.2' => '1.2',
              '1.3' => '1.3',
              '1.4' => '1.4',
              '1.5' => '1.5',
              '1.6' => '1.6',
              '1.7' => '1.7',
              '1.8' => '1.8',
              '1.9' => '1.9',
              '2.0' => '2.0',
              '2.5' => '2.5',
              '3.0' => '3.0',
              '3.5' => '3.5',
              '4.0' => '4.0',
              '4.5' => '4.5',
              '5.0' => '5.0',
              '5.5' => '5.5',
              '6.0' => '6.0',
              '6.5' => '6.5',
              '7.0' => '7.0',
              '7.5' => '7.5',
              '8.0' => '8.0',
              '8.5' => '8.5',
              '9.0' => '9.0',
              '9.5' => '9.5',
              '10.0' => '10.0',
          ],
          '#required' => false,
        ],

        'camera-offset-vr' => [
          '#label' => 'Camera Distance to Model in VR',
          '#description' => 'Select a value.',
          '#help' => 'The initial camera distance is applied when the model is viewed in VR.',
          '#type' => 'options-select',
          '#options' => [
              '1.0' => '1.0',
              '1.2' => '1.2',
              '1.4' => '1.4',
              '1.6' => '1.6',
              '1.8' => '1.8',
              '2.0' => '2.0',
              '2.2' => '2.2',
              '2.4' => '2.4',
              '2.6' => '2.6',
              '2.8' => '2.8',
              '3.0' => '3.0',
              '3.2' => '3.2',
              '3.4' => '3.4',
              '3.6' => '3.6',
              '3.8' => '3.8',
              '4.0' => '4.0',
              '4.2' => '4.2',
              '4.4' => '4.4',
              '4.6' => '4.6',
              '4.8' => '4.8',
              '5.0' => '5.0',
              '5.2' => '5.2',
              '5.4' => '5.4',
              '5.6' => '5.6',
              '5.8' => '5.8',
              '6.0' => '6.0',
              '6.2' => '6.2',
              '6.4' => '6.4',
              '6.6' => '6.6',
              '6.8' => '6.8',
              '7.0' => '7.0',
              '7.2' => '7.2',
              '7.4' => '7.4',
              '7.6' => '7.6',
              '7.8' => '7.8',
              '8.0' => '8.0',
              '8.2' => '8.2',
              '8.4' => '8.4',
              '8.6' => '8.6',
              '8.8' => '8.8',
              '9.0' => '9.0',
              '9.2' => '9.2',
              '9.4' => '9.4',
              '9.6' => '9.6',
              '9.8' => '9.8',
              '10.0' => '10.0',
              '12.0' => '12.0',
              '14.0' => '14.0',
              '16.0' => '16.0',
              '18.0' => '18.0',
              '20.0' => '20.0',
              '22.0' => '22.0',
              '24.0' => '24.0',
              '26.0' => '26.0',
              '28.0' => '28.0',
              '30.0' => '30.0',
              '32.0' => '32.0',
              '34.0' => '34.0',
              '36.0' => '36.0',
              '38.0' => '38.0',
              '40.0' => '40.0',
          ],
          '#required' => true,
        ],

        'camera-offset' => [
          '#label' => 'Camera Distance to Model When Not Viewed in VR',
          '#description' => 'Select a value.',
          '#help' => 'The distance value in meters is applied when the model is viewed on a desktop PC or mobile device.',
          '#type' => 'options-select',
          '#options' => [
              '0.2' => '0.2',
              '0.4' => '0.4',
              '0.6' => '0.6',
              '0.8' => '0.8',
              '1.0' => '1.0',
              '1.2' => '1.2',
              '1.4' => '1.4',
              '1.6' => '1.6',
              '1.8' => '1.8',
              '2.0' => '2.0',
              '2.2' => '2.2',
              '2.4' => '2.4',
              '2.6' => '2.6',
              '2.8' => '2.8',
              '3.0' => '3.0',
              '3.2' => '3.2',
              '3.4' => '3.4',
              '3.6' => '3.6',
              '3.8' => '3.8',
              '4.0' => '4.0',
              '4.2' => '4.2',
              '4.4' => '4.4',
              '4.6' => '4.6',
              '4.8' => '4.8',
              '5.0' => '5.0',
              '5.2' => '5.2',
              '5.4' => '5.4',
              '5.6' => '5.6',
              '5.8' => '5.8',
              '6.0' => '6.0',
              '6.2' => '6.2',
              '6.4' => '6.4',
              '6.6' => '6.6',
              '6.8' => '6.8',
              '7.0' => '7.0',
              '7.2' => '7.2',
              '7.4' => '7.4',
              '7.6' => '7.6',
              '7.8' => '7.8',
              '8.0' => '8.0',
              '8.2' => '8.2',
              '8.4' => '8.4',
              '8.6' => '8.6',
              '8.8' => '8.8',
              '9.0' => '9.0',
              '9.2' => '9.2',
              '9.4' => '9.4',
              '9.6' => '9.6',
              '9.8' => '9.8',
              '10.0' => '10.0',
              '12.0' => '12.0',
              '14.0' => '14.0',
              '16.0' => '16.0',
              '18.0' => '18.0',
              '20.0' => '20.0',
              '22.0' => '22.0',
              '24.0' => '24.0',
              '26.0' => '26.0',
              '28.0' => '28.0',
              '30.0' => '30.0',
              '32.0' => '32.0',
              '34.0' => '34.0',
              '36.0' => '36.0',
              '38.0' => '38.0',
              '40.0' => '40.0',
          ],
          '#required' => false,
        ],

        'rotation-x' => [
          '#label' => 'Model X-Axis Rotation',
          '#description' => 'Select a rotation value.',
          '#help' => 'The x-axis rotation value is applied for desktop, mobile and in VR.',
          '#type' => 'options-select',
          '#options' => [
              '0' => '0',
              '10' => '10',
              '20' => '20',
              '30' => '30',
              '40' => '40',
              '50' => '50',
              '60' => '60',
              '70' => '70',
              '80' => '80',
              '90' => '90',
              '100' => '100',
              '110' => '110',
              '120' => '120',
              '130' => '130',
              '140' => '140',
              '150' => '150',
              '160' => '160',
              '170' => '170',
              '180' => '180',
              '190' => '190',
              '200' => '200',
              '210' => '210',
              '220' => '220',
              '230' => '230',
              '240' => '240',
              '250' => '250',
              '260' => '260',
              '270' => '270',
              '280' => '280',
              '290' => '290',
              '300' => '300',
              '310' => '310',
              '320' => '320',
              '330' => '330',
              '340' => '340',
              '350' => '350',
              '360' => '360',
          ],
          '#required' => false,
        ],

        'rotation-y' => [
          '#label' => 'Model Y-Axis Rotation',
          '#description' => 'Select a rotation value.',
          '#help' => 'The y-axis rotation value is applied for desktop, mobile and in VR.',
          '#type' => 'options-select',
          '#options' => [
              '0' => '0',
              '10' => '10',
              '20' => '20',
              '30' => '30',
              '40' => '40',
              '50' => '50',
              '60' => '60',
              '70' => '70',
              '80' => '80',
              '90' => '90',
              '100' => '100',
              '110' => '110',
              '120' => '120',
              '130' => '130',
              '140' => '140',
              '150' => '150',
              '160' => '160',
              '170' => '170',
              '180' => '180',
              '190' => '190',
              '200' => '200',
              '210' => '210',
              '220' => '220',
              '230' => '230',
              '240' => '240',
              '250' => '250',
              '260' => '260',
              '270' => '270',
              '280' => '280',
              '290' => '290',
              '300' => '300',
              '310' => '310',
              '320' => '320',
              '330' => '330',
              '340' => '340',
              '350' => '350',
              '360' => '360',
          ],
          '#required' => false,
        ],

        'rotation-z' => [
          '#label' => 'Model Z-Axis Rotation',
          '#description' => 'Select a rotation value.',
          '#help' => 'The z-axis rotation value is applied for desktop, mobile and in VR.',
          '#type' => 'options-select',
          '#options' => [
              '0' => '0',
              '10' => '10',
              '20' => '20',
              '30' => '30',
              '40' => '40',
              '50' => '50',
              '60' => '60',
              '70' => '70',
              '80' => '80',
              '90' => '90',
              '100' => '100',
              '110' => '110',
              '120' => '120',
              '130' => '130',
              '140' => '140',
              '150' => '150',
              '160' => '160',
              '170' => '170',
              '180' => '180',
              '190' => '190',
              '200' => '200',
              '210' => '210',
              '220' => '220',
              '230' => '230',
              '240' => '240',
              '250' => '250',
              '260' => '260',
              '270' => '270',
              '280' => '280',
              '290' => '290',
              '300' => '300',
              '310' => '310',
              '320' => '320',
              '330' => '330',
              '340' => '340',
              '350' => '350',
              '360' => '360',
          ],
          '#required' => false,
        ],

        'scene-background-color' => [
          '#label' => 'Scene Background Color',
          '#description' => 'Select a background color.',
          '#help' => 'Select a background color.',
          '#type' => 'color',
          '#required' => false,
        ],

        'attach-annotations' => [
          '#label' => 'Hotspots',
          '#description' => 'Attach hotspots with text and image annotations to your 3D model.',
          '#help' => 'Attach hotspots with text and image annotations to your 3D model.',
          '#type' => 'position',
          '#maxnumber' => 20, 
          '#required' => false,
          '#content-type-reference' => 'annotations',
          '#field-reference' => 'model',
        ],

        'hotspot-scale' => [
          '#label' => 'Hotspot Scale',
          '#description' => 'Select a value.',
          '#help' => 'This value is applied for desktop, mobile and in VR.',
          '#type' => 'options-select',
          '#options' => [
              '1.0 1.0 1.0' => '1.0',
              '2.0 2.0 2.0' => '2.0',
              '3.0 3.0 3.0' => '3.0',
              '4.0 4.0 4.0' => '4.0',
              '5.0 5.0 5.0' => '5.0',
              '6.0 6.0 6.0' => '6.0',
              '7.0 7.0 7.0' => '7.0',
              '8.0 8.0 8.0' => '8.0',
              '9.0 9.0 9.0' => '9.0',
              '10.0 10.0 10.0' => '10.0',
              '12.0 12.0 12.0' => '12.0',
              '14.0 14.0 14.0' => '14.0',
              '16.0 16.0 16.0' => '16.0',
              '18.0 18.0 18.0' => '18.0',
              '20.0 20.0 20.0' => '20.0',
              '22.0 22.0 22.0' => '22.0',
              '24.0 24.0 24.0' => '24.0',
              '26.0 26.0 26.0' => '26.0',
              '28.0 28.0 28.0' => '28.0',
              '30.0 30.0 30.0' => '30.0',
              '32.0 32.0 32.0' => '32.0',
              '34.0 34.0 34.0' => '34.0',
              '36.0 36.0 36.0' => '36.0',
              '38.0 38.0 38.0' => '38.0',
              '40.0 40.0 40.0' => '40.0',
          ],
          '#required' => false,
        ],

      ], /* fields */

    ], /* photo-spheres */

  ], /* content types */

];


