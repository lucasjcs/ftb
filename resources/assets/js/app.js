import { jsdom } from 'jsdom'
import $ from 'jquery'
import axios from 'axios'
import Element from './Form/Element'

Window.$ = $
const form = $("[data-ftb-id=contact]")


// Pega os inputs
let inputs = []
$("[data-ftb-id=contact] input, [data-ftb-id=contact] textarea").each((i, input) => {
  inputs.push(input)
})

inputs = inputs.map(input => (new Element(input)))
console.log(inputs)


$("[data-ftb-id]").submit((event) => {
  event.preventDefault()

  axios.post("{URL}", {

  })
})