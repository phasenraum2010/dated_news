# General
## Installation
### Requirements

1. TYPO3 CMS 7.6 - 8.7
2. tx_news 5.3.0 - 6.1.99
3. recurr 1.0.0


### Installation
#### via Extensionmanager (TER)
1. Switch to the module “Extension Manager”.
2. Get the extension(s) from the Extension Manager: Press the “Retrieve/Update” button and search for the extension key dated_news and import the extension from the repository.

#### via composer latest GITHUB Version (in development)
1. Add `https://github.com/daCyberpunk/dated_news` and `https://github.com/daCyberpunk/recurr` to your repositories in composer.json.
2. Add `"falkroeder/dated-news": "dev-master"` and `"falkroeder/recurr": "^1.0"` to your require array in composer.json. 
3. ofcourse you need to install news as well. 
4. composer update/install

#### via composer (TER)
1. Add `"typo3-ter/dated-news": "^5.0"` and `"typo3-ter/recurr": "^1.0"` to your require array in composer.json. 
3. ofcourse you need to install news as well. 
4. composer update/install


### Include static Typoscript

The extension ships some TypoScript code which needs to be included.

1. Switch to the root page of your site.
2. Switch to the Template module and select *Info/Modify*.
3. Press the link *Edit the whole template record* and switch to the tab Includes.
4. Select *Dated News (dated_news)* at the field Include static (from extensions):

## jQuery
If no jquery is included on your page, you need to set the following TypoScript option: `plugin.tx_news.settings.dated_news.includeJQuery = 1`. The Extension then will include it by itself. 

## cHash Parameter
> You have to exclude parameter for chash calculation in Installtool. Otherwise it won't work.

Go to Installtool -> All configuration and loog for the option "[FE][cHashExcludedParameters]" 
There you have to add: `tx_news_pi1[newApplication],tx_news_pi1[title]`

## Page Structure
### Recommendation
In Order to get the whole workflow of event presentation an registration working, the following page structure is recommended.

You will need following 4 pages:
   * __Calendar or List View Page__
   
     The calendar View is nothing other than a list view of items, but in form of an calendar. You need to specify the detail page ID
   
   * __Detail Page__
   
     On that page a Plugin with Event Detail is configured. If you use the original Detail Configuration of tx_news there will be no details about the event and no booking form available.
     Set here the page ID for the Booking Page
   
   * __Booking Page__
   
     Here a Plugin with the view Booking Created is configured. Set here the Page ID for the confirmation Page
   
   * __Confirmation Page__
   
     That's the page where User will be redirected when they click on the confirmation Mail which will be sended out when a user registrates for an event. 
   
   
### Alternatives
   * As with news itself, you can have more complex structure like by categories for example. You can have them one global booking and one global confirmation page, but of course its also possible have these multiple times in your TYPO3 Backend. 
   * The Plugin provides also a List/Detail view. So you can have both, The List and the Detail View with booking form  on the same page. 
   
   
