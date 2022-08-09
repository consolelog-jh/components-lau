# Components LAU

## Input  
> change in `tailwind.config.js`  
> colors : `inputbg`, `inputbgd`, `inputerror`,  
`inputerrord`, `inputiconfront`, `labelinput`  
> size : `s-inputerror`, `s-labelinput`

- `x-inputs.sample`  
```js
// class for div global of component
<x-inputs.sample class-div=""/>

// label of input
<x-inputs.sample label=""/>

// name of icon in input
<x-inputs.sample icon-name=""/>

// name of input
// name => 'user' , 'password'
<x-inputs.sample name=""/>

// label's class
<x-inputs.sample class-label=""/>

<input {{ $attributes }} />
```  

## Title
> change in tailwind.config.js  
> size : `h1`, `h2`, `h3`, `h4`, `h5`, `h6`

- `x-titles.h1`  
- `x-titles.h2`  
- `x-titles.h3`  
- `x-titles.h4`  
- `x-titles.h5`  
- `x-titles.h6`  

> example for all title
```js
// additional new class
<x-titles.h1 add-class="">mon title</x-titles.h1>

// attributes on balise 'h'
// slot in balise 'h'
<h1 {{ $attributes }} >
    {{ $slot }}
</h1>
```  

## Form  

- `x-form.sample`  
```html
<!-- add your url action for form -->
<x-form.sample action="">
    <!-- your code -->
</x-form.sample>

<!-- change method for form, default 'POST' -->
<x-form.sample method="">
    <!-- your code -->
</x-form.sample>

<!-- add super method example : 'PUT' etc.. -->
<x-form.sample other-method="PUT">
    <!-- your code -->
</x-form.sample>

<!-- attributes on balise 'form' -->
<!-- slot in balise 'form' -->
<form {{ $attributes }} >
    {{ $slot }}
</form>
```  

## Link  
> change in `tailwind.config.js`  
> size : `s-linkiconarrow`, `s-linktextsample`  
> color : `linkiconarrow`, `linkiconarrowd`,  
`linktextsample`, `linktextsampled`

- `x-links.text-icon-arrow`  
> component link text sample with icon left or right  
> and underline with hover
```html
<!-- add class on balise 'a' -->
<x-links.text-icon-arrow class-a="">
    <!-- your link -->
</x-links.text-icon-arrow>

<!-- add icon arrow left of text, default false -->
<x-links.text-icon-arrow is-icon-front="true">
    <!-- your link -->
</x-links.text-icon-arrow>

<!-- add icon arrow right of text, default false -->
<x-links.text-icon-arrow is-icon-back="true">
    <!-- your link -->
</x-links.text-icon-arrow>

<!-- attributes on balise 'a' -->
<!-- slot in balise 'a' -->
<a {{ $attributes }} >
    {{ $slot }}
</a>
```  

- `x-links.text-sample`  
> component link text sample 
> and underline with hover 
```html
<!-- add class on balise 'a' -->
<x-links.text-sample class-a="">
    <!-- your link -->
</x-links.text-samp>

<!-- attributes on balise 'a' -->
<!-- slot in balise 'a' -->
<a {{ $attributes }} >
    {{ $slot }}
</a>
```

