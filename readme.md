# MhsDesign.Neos.AfxFiles

## Provides option to use AFX in separate template files.

Your Fusion Code:
```
prototype(Vendor.Site:Content.Stuff) < prototype(Neos.Neos:ContentComponent) {

    title = Neos.Neos:Editable {
        property = "title"
    }
    somOtherProp = 'Hello World'

    renderer = afxFile`resource://Vendor.Site/Private/Fusion/Content/Stuff/Stuff.afx`
}
```

Your AFX File e.g. `./DistributionPackages/Vendor.Site/Resources/Private/Fusion/Content/Stuff/Stuff.afx`
(you can use as file extension whatever you like e.g. `.html` `.afx`)
```
<section class="foo">
    <div class="bar">
        <h2>{props.title}</h2>
        <p>{props.somOtherProp}</p>
        <Vendor.Site:Content.SomeComponent/>
    </div>
</section>
```
