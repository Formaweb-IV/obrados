# README

- Crear espazo para o proxecto

  Na consola crear cartafol - ``mkdir nomedoporxecto`` 

  Acceder ao cartafol - ``cd nomedoproxecto``

  - Inicializalo proxecto - ``npm init``

    ```json
    {
      "name": "obrados",
      "version": "1.0.0",
      "description": "segunda fase do crm para o servizo de orientacion laboral",
      "main": "index.js",
      "scripts": {
        "test": "test"
      },
      "repository": {
        "type": "git",
        "url": "git+https://github.com/Formaweb-IV/obrados.git"
      },
      "keywords": [
        "crn",
        "sol"
      ],
      "author": "grupo de traballo formaweb-iv",
      "license": "ISC",
      "bugs": {
        "url": "https://github.com/Formaweb-IV/obrados/issues"
      },
      "homepage": "https://github.com/Formaweb-IV/obrados#readme"
    }
    
    ```
  
    
  
  - instalar dependencias de estilo - ``npm install bootstrap``
  
    (*revisar o modelo de referencia do framework de estilo Bootstrap en https://github.com/twbs/bootstrap-npm-starter*)
  
  - instalar familia de iconos de Bootstrap:  ``npm i bootstrap-icons``
  
  - instalar dependencias de compilación e desenvolvemento:  ``npm install autoprefixer -D``
  
    - ```json
          "autoprefixer": "^10.4.2",
          "node-sass": "^7.0.1",
          "nodemon": "^2.0.15",
          "npm-run-all": "^4.1.5",
          "postcss": "^8.4.6",
          "postcss-cli": "^9.1.0",
          "purgecss": "^4.1.3",
          "serve": "^13.0.2",
          "stylelint": "^14.5.0",
          "stylelint-config-twbs-bootstrap": "^3.0.1
      ```
  
  - crear scripts de compilación:
  
    - ```json
          "build": "npm run css",
          "css-compile": "sass --style compressed --source-map --embed-sources --no-error-css --load-path=node_modules scss/:assets/css/",
          "css-lint": "stylelint scss/",
          "css-prefix": "postcss --replace assets/css/starter.css --use autoprefixer --map",
          "css-purge": "purgecss --keyframes --css assets/css/starter.css --content index.html \"node_modules/bootstrap/js/dist/dom/*.js\" \"node_modules/bootstrap/js/dist/{base-component,dropdown,modal,offcanvas}.js\" --output assets/css/",
          "css": "npm-run-all css-compile css-prefix",
          "server": "serve --listen 3000",
          "start": "npm-run-all --parallel watch server",
          "watch": "nodemon -e html,scss -x \"npm run css\"",
          "test": "npm-run-all css-lint css"
      ```
  
  - crear ``index.html`` e comprobar activos.
  
    - ```html
      <!DOCTYPE html>
      <html lang="en">
      <head>
          <meta charset="UTF-8">
          <meta name="viewport" content="width=device-width, initial-scale=1.0">
          <title>CRM-SOL</title>
          
          <link rel="stylesheet" href="assets/css/style.css">
      </head>
      <body>
          
      
      
          <script src="node_modules/popper.js/dist/umd/popper.min.js"></script>
          <script src="assets/js/style.css"></script>
      </body>
      </html>
      ```
  
  - para mellorar a compilación e o desenvolvemento podense incoporar alguns arquivos de configuración coma:
  
    - ``.browserslistrc`` - listado de browsers aos que prestar atención xerando clases con autoprefixo se fora necesario-.  *ref:# https://github.com/browserslist/browserslist#readme*
  
      *https://github.com/twbs/bootstrap/blob/v5.0.2/.browserslistrc*
  
    - ``.stylelintrc`` -  sinalado que lintado imos a empregar
  
      ```js
      {
        "extends": [
          "stylelint-config-twbs-bootstrap/scss"
        ]
      }
      ```
  
    - ``.stylelintignore`` - que activos non é necesario lintar
  
      ```json
      **/*.min.css
      **/dist/
      node_modules
      ```
  
    - ou ``.editorconfig``  - por si queremos persoalizar o comportamento do editor de código
  
      ```json
      # editorconfig.org
      
      root = true
      
      [*]
      charset = utf-8
      end_of_line = lf
      indent_size = 2
      indent_style = space
      insert_final_newline = true
      trim_trailing_whitespace = true
      ```
  
    - 
  
  

#### 
