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

- `x-inputs.select`  
> change in `tailwind.config.js`
> these are the same variable as for  
> the input sample and the label
```html
<!-- placeholder for option's select inpur -->
<x-inputs.select 
    placeholder="Selectionner..."
/>

<!-- name for option's select input -->
<x-inputs.select  
    name="" 
/>

<!-- label of input -->
<x-inputs.select  
    label="" 
/>

<!-- selected for select one option init -->
<x-inputs.select  
    selected="" 
/>

<!-- entities for model for select input -->
<x-inputs.select
    :entities="$roles"
/>
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

<!-- change size of text -->
<x-links.text-icon-arrow text-size="">
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
```html
<!-- add class on balise 'a' -->
<x-links.text-sample class-a="">
    <!-- your link -->
</x-links.text-samp>

<!-- change size of text -->
<x-links.text-icon-arrow text-size="">
    <!-- your link -->
</x-links.text-icon-arrow>

<!-- attributes on balise 'a' -->
<!-- slot in balise 'a' -->
<a {{ $attributes }} >
    {{ $slot }}
</a>
```

## btn  

- `x-btn.btn-form`  
> change in `tailwind.config.js`  
> colors : `tbtnform` `tbtnformh` `tbtnformd`  
> `tbtnformhd` `bgbtnform` `bgbtnformh` `bgbtnformd` `bgbtnformhd`  
> size text : `s-btnform`  
```html
<!-- add class on div global component -->
<x-btn.btn-form class-div="">
    <!-- your text of btn -->
</x-btn.btn-form>

<!-- add type of btn, default "submit" -->
<x-btn.btn-form type="">
    <!-- your text of btn -->
</x-btn.btn-form>

<!-- add class on button balise -->
<x-btn.btn-form class-btn="">
    <!-- your text of btn -->
</x-btn.btn-form>

<!-- slot -->
<button {{ $attributes }}>{{ $slot }}</button>
```  

- `x-btn.btn-sample`  
> change in `tailwind.config.js`  
> colors : `tbtnsample` `tbtnsampleh` `tbtnsampled`  
> `tbtnsamplehd` `bgbtnsample` `bgbtnsampleh` `bgbtnsampled` `bgbtnsamplehd`  
> size text : `s-btnsample`  
```html
<!-- add class on div global component -->
<x-btn.btn-form class-div="">
    <!-- your text of btn -->
</x-btn.btn-form>

<!-- add type of btn, default "button" -->
<x-btn.btn-form type="">
    <!-- your text of btn -->
</x-btn.btn-form>

<!-- add class on button balise -->
<x-btn.btn-form class-btn="">
    <!-- your text of btn -->
</x-btn.btn-form>

<!-- slot -->
<button {{ $attributes }}>{{ $slot }}</button>
```  

## user forms  

- `x-user-forms.register`  
> commented out depending on your user model  
> uncomment form actions once fortify install  
```html
<!-- add model roles for input select -->
<x-user-forms.register :roles="$roles" />
```  

- `x-user-forms.login`  
> uncomment form actions once fortify install  
> uncomment href on link forgot password

- `x-user-forms.logout`  
```html
<!-- add anything in slot (icon, text etc...) -->
<!-- attributes on button balise -->
<button {{ $attributes }}>
        {{ $slot }}
</button>
```  

- `x-user-forms.reset-password`  
> uncomment form actions once fortify install  

- `x-user-forms.update-profil`  
> uncomment form actions once fortify install  

- `x-user-forms.verify-email`  
> uncomment form actions once fortify install  

- `x-user-forms.forgot-password`   
> uncomment form actions once fortify install  

## files auth for fortyfi  

- copy / paste folder auth in `resources/views/auth`  
> this files is blank  


