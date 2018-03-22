import fs from 'fs'
import path from 'path'
import { JSDOM } from 'jsdom'
import Element from './Core/Element'

const HTML = fs.readFileSync(`./../public/contact.html`).toString()
const document = new JSDOM(HTML)
const $ = require('jquery')(document.window);

let inputs = [];

$("[data-ftb-id=contact] input, [data-ftb-id=contact] textarea").each((i, input) => { inputs.push(input) });
inputs = inputs.map(input => new Element($(input)))

const json_inputs = JSON.stringify(inputs, null, 2)

fs.writeFile('./public/inputs.json', json_inputs, (err) =>{
  if (err) throw err;
  console.log('feito com sucesso')
});

