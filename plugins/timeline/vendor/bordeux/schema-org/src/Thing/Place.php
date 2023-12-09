<?php

namespace Bordeux\SchemaOrg\Thing;

/**
 * Generated by bordeux/schema
 *
 * @author Krzysztof Bednarczyk <schema@bordeux.net>
 * @link http://schema.org/Place
 *
 *
 * -------------------------------- Address ---------------------------------------------
 *
 * @property \Bordeux\SchemaOrg\Thing\Intangible\StructuredValue\ContactPoint\PostalAddress|\Bordeux\SchemaOrg\Thing\Intangible\StructuredValue\ContactPoint\PostalAddress[] address
 *
 * @method \Bordeux\SchemaOrg\Thing\Intangible\StructuredValue\ContactPoint\PostalAddress|\Bordeux\SchemaOrg\Thing\Intangible\StructuredValue\ContactPoint\PostalAddress[] getAddress() Physical address of the item.
 *
 * @method Place setAddress(\Bordeux\SchemaOrg\Thing\Intangible\StructuredValue\ContactPoint\PostalAddress $address ) setAddress(\Bordeux\SchemaOrg\Thing\Intangible\StructuredValue\ContactPoint\PostalAddress[] $address )Physical address of the item.
 *
 *
 * -------------------------------- AggregateRating ---------------------------------------------
 *
 * @property \Bordeux\SchemaOrg\Thing\Intangible\Rating\AggregateRating|\Bordeux\SchemaOrg\Thing\Intangible\Rating\AggregateRating[] aggregateRating
 *
 * @method \Bordeux\SchemaOrg\Thing\Intangible\Rating\AggregateRating|\Bordeux\SchemaOrg\Thing\Intangible\Rating\AggregateRating[] getAggregateRating() The overall rating, based on a collection of reviews or ratings, of the item.
 *
 * @method Place setAggregateRating(\Bordeux\SchemaOrg\Thing\Intangible\Rating\AggregateRating $aggregateRating ) setAggregateRating(\Bordeux\SchemaOrg\Thing\Intangible\Rating\AggregateRating[] $aggregateRating )The overall rating, based on a collection of reviews or ratings, of the item.
 *
 *
 * -------------------------------- ContainedIn ---------------------------------------------
 *
 * @property \Bordeux\SchemaOrg\Thing\Place|\Bordeux\SchemaOrg\Thing\Place[] containedIn
 *
 * @method \Bordeux\SchemaOrg\Thing\Place|\Bordeux\SchemaOrg\Thing\Place[] getContainedIn() The basic containment relation between places.
 *
 * @method Place setContainedIn(\Bordeux\SchemaOrg\Thing\Place $containedIn ) setContainedIn(\Bordeux\SchemaOrg\Thing\Place[] $containedIn )The basic containment relation between places.
 *
 *
 * -------------------------------- Event ---------------------------------------------
 *
 * @property \Bordeux\SchemaOrg\Thing\Event|\Bordeux\SchemaOrg\Thing\Event[] event
 *
 * @method \Bordeux\SchemaOrg\Thing\Event|\Bordeux\SchemaOrg\Thing\Event[] getEvent() Upcoming or past event associated with this place or organization.
 *
 * @method Place setEvent(\Bordeux\SchemaOrg\Thing\Event $event ) setEvent(\Bordeux\SchemaOrg\Thing\Event[] $event )Upcoming or past event associated with this place or organization.
 *
 *
 * -------------------------------- Events ---------------------------------------------
 *
 * @property \Bordeux\SchemaOrg\Thing\Event|\Bordeux\SchemaOrg\Thing\Event[] events
 *
 * @method \Bordeux\SchemaOrg\Thing\Event|\Bordeux\SchemaOrg\Thing\Event[] getEvents() Upcoming or past events associated with this place or organization (legacy spelling; see singular form, event).
 *
 * @method Place setEvents(\Bordeux\SchemaOrg\Thing\Event $events ) setEvents(\Bordeux\SchemaOrg\Thing\Event[] $events )Upcoming or past events associated with this place or organization (legacy spelling; see singular form, event).
 *
 *
 * -------------------------------- FaxNumber ---------------------------------------------
 *
 * @property string|string[] faxNumber
 *
 * @method string|string[] getFaxNumber() The fax number.
 *
 * @method Place setFaxNumber(string $faxNumber ) setFaxNumber(string[] $faxNumber )The fax number.
 *
 *
 * -------------------------------- Geo ---------------------------------------------
 *
 * @property \Bordeux\SchemaOrg\Thing\Intangible\StructuredValue\GeoCoordinates|\Bordeux\SchemaOrg\Thing\Intangible\StructuredValue\GeoCoordinates[]|\Bordeux\SchemaOrg\Thing\Intangible\StructuredValue\GeoShape|\Bordeux\SchemaOrg\Thing\Intangible\StructuredValue\GeoShape[] geo
 *
 * @method \Bordeux\SchemaOrg\Thing\Intangible\StructuredValue\GeoCoordinates|\Bordeux\SchemaOrg\Thing\Intangible\StructuredValue\GeoCoordinates[]|\Bordeux\SchemaOrg\Thing\Intangible\StructuredValue\GeoShape|\Bordeux\SchemaOrg\Thing\Intangible\StructuredValue\GeoShape[] getGeo() The geo coordinates of the place.
 *
 * @method Place setGeo(\Bordeux\SchemaOrg\Thing\Intangible\StructuredValue\GeoCoordinates $geo ) setGeo(\Bordeux\SchemaOrg\Thing\Intangible\StructuredValue\GeoCoordinates[] $geo ) setGeo(\Bordeux\SchemaOrg\Thing\Intangible\StructuredValue\GeoShape $geo ) setGeo(\Bordeux\SchemaOrg\Thing\Intangible\StructuredValue\GeoShape[] $geo )The geo coordinates of the place.
 *
 *
 * -------------------------------- GlobalLocationNumber ---------------------------------------------
 *
 * @property string|string[] globalLocationNumber
 *
 * @method string|string[] getGlobalLocationNumber() The Global Location Number (GLN, sometimes also referred to as International Location Number or ILN) of the respective organization, person, or place. The GLN is a 13-digit number used to identify parties and physical locations.
 *
 * @method Place setGlobalLocationNumber(string $globalLocationNumber ) setGlobalLocationNumber(string[] $globalLocationNumber )The Global Location Number (GLN, sometimes also referred to as International Location Number or ILN) of the respective organization, person, or place. The GLN is a 13-digit number used to identify parties and physical locations.
 *
 *
 * -------------------------------- InteractionCount ---------------------------------------------
 *
 * @property string|string[] interactionCount
 *
 * @method string|string[] getInteractionCount() A count of a specific user interactions with this item—for example, 20 UserLikes, 5 UserComments, or 300 UserDownloads. The user interaction type should be one of the sub types of UserInteraction.
 *
 * @method Place setInteractionCount(string $interactionCount ) setInteractionCount(string[] $interactionCount )A count of a specific user interactions with this item—for example, 20 UserLikes, 5 UserComments, or 300 UserDownloads. The user interaction type should be one of the sub types of UserInteraction.
 *
 *
 * -------------------------------- IsicV4 ---------------------------------------------
 *
 * @property string|string[] isicV4
 *
 * @method string|string[] getIsicV4() The International Standard of Industrial Classification of All Economic Activities (ISIC), Revision 4 code for a particular organization, business person, or place.
 *
 * @method Place setIsicV4(string $isicV4 ) setIsicV4(string[] $isicV4 )The International Standard of Industrial Classification of All Economic Activities (ISIC), Revision 4 code for a particular organization, business person, or place.
 *
 *
 * -------------------------------- Logo ---------------------------------------------
 *
 * @property string|string[]|\Bordeux\SchemaOrg\Thing\CreativeWork\MediaObject\ImageObject|\Bordeux\SchemaOrg\Thing\CreativeWork\MediaObject\ImageObject[] logo
 *
 * @method string|string[]|\Bordeux\SchemaOrg\Thing\CreativeWork\MediaObject\ImageObject|\Bordeux\SchemaOrg\Thing\CreativeWork\MediaObject\ImageObject[] getLogo() A logo associated with an organization.
 *
 * @method Place setLogo(string $logo ) setLogo(string[] $logo ) setLogo(\Bordeux\SchemaOrg\Thing\CreativeWork\MediaObject\ImageObject $logo ) setLogo(\Bordeux\SchemaOrg\Thing\CreativeWork\MediaObject\ImageObject[] $logo )A logo associated with an organization.
 *
 *
 * -------------------------------- Map ---------------------------------------------
 *
 * @property string|string[] map
 *
 * @method string|string[] getMap() A URL to a map of the place.
 *
 * @method Place setMap(string $map ) setMap(string[] $map )A URL to a map of the place.
 *
 *
 * -------------------------------- Maps ---------------------------------------------
 *
 * @property string|string[] maps
 *
 * @method string|string[] getMaps() A URL to a map of the place (legacy spelling; see singular form, map).
 *
 * @method Place setMaps(string $maps ) setMaps(string[] $maps )A URL to a map of the place (legacy spelling; see singular form, map).
 *
 *
 * -------------------------------- OpeningHoursSpecification ---------------------------------------------
 *
 * @property \Bordeux\SchemaOrg\Thing\Intangible\StructuredValue\OpeningHoursSpecification|\Bordeux\SchemaOrg\Thing\Intangible\StructuredValue\OpeningHoursSpecification[] openingHoursSpecification
 *
 * @method \Bordeux\SchemaOrg\Thing\Intangible\StructuredValue\OpeningHoursSpecification|\Bordeux\SchemaOrg\Thing\Intangible\StructuredValue\OpeningHoursSpecification[] getOpeningHoursSpecification() The opening hours of a certain place.
 *
 * @method Place setOpeningHoursSpecification(\Bordeux\SchemaOrg\Thing\Intangible\StructuredValue\OpeningHoursSpecification $openingHoursSpecification ) setOpeningHoursSpecification(\Bordeux\SchemaOrg\Thing\Intangible\StructuredValue\OpeningHoursSpecification[] $openingHoursSpecification )The opening hours of a certain place.
 *
 *
 * -------------------------------- Photo ---------------------------------------------
 *
 * @property \Bordeux\SchemaOrg\Thing\CreativeWork\MediaObject\ImageObject|\Bordeux\SchemaOrg\Thing\CreativeWork\MediaObject\ImageObject[]|\Bordeux\SchemaOrg\Thing\CreativeWork\Photograph|\Bordeux\SchemaOrg\Thing\CreativeWork\Photograph[] photo
 *
 * @method \Bordeux\SchemaOrg\Thing\CreativeWork\MediaObject\ImageObject|\Bordeux\SchemaOrg\Thing\CreativeWork\MediaObject\ImageObject[]|\Bordeux\SchemaOrg\Thing\CreativeWork\Photograph|\Bordeux\SchemaOrg\Thing\CreativeWork\Photograph[] getPhoto() A photograph of this place.
 *
 * @method Place setPhoto(\Bordeux\SchemaOrg\Thing\CreativeWork\MediaObject\ImageObject $photo ) setPhoto(\Bordeux\SchemaOrg\Thing\CreativeWork\MediaObject\ImageObject[] $photo ) setPhoto(\Bordeux\SchemaOrg\Thing\CreativeWork\Photograph $photo ) setPhoto(\Bordeux\SchemaOrg\Thing\CreativeWork\Photograph[] $photo )A photograph of this place.
 *
 *
 * -------------------------------- Photos ---------------------------------------------
 *
 * @property \Bordeux\SchemaOrg\Thing\CreativeWork\MediaObject\ImageObject|\Bordeux\SchemaOrg\Thing\CreativeWork\MediaObject\ImageObject[]|\Bordeux\SchemaOrg\Thing\CreativeWork\Photograph|\Bordeux\SchemaOrg\Thing\CreativeWork\Photograph[] photos
 *
 * @method \Bordeux\SchemaOrg\Thing\CreativeWork\MediaObject\ImageObject|\Bordeux\SchemaOrg\Thing\CreativeWork\MediaObject\ImageObject[]|\Bordeux\SchemaOrg\Thing\CreativeWork\Photograph|\Bordeux\SchemaOrg\Thing\CreativeWork\Photograph[] getPhotos() Photographs of this place (legacy spelling; see singular form, photo).
 *
 * @method Place setPhotos(\Bordeux\SchemaOrg\Thing\CreativeWork\MediaObject\ImageObject $photos ) setPhotos(\Bordeux\SchemaOrg\Thing\CreativeWork\MediaObject\ImageObject[] $photos ) setPhotos(\Bordeux\SchemaOrg\Thing\CreativeWork\Photograph $photos ) setPhotos(\Bordeux\SchemaOrg\Thing\CreativeWork\Photograph[] $photos )Photographs of this place (legacy spelling; see singular form, photo).
 *
 *
 * -------------------------------- Review ---------------------------------------------
 *
 * @property \Bordeux\SchemaOrg\Thing\CreativeWork\Review|\Bordeux\SchemaOrg\Thing\CreativeWork\Review[] review
 *
 * @method \Bordeux\SchemaOrg\Thing\CreativeWork\Review|\Bordeux\SchemaOrg\Thing\CreativeWork\Review[] getReview() A review of the item.
 *
 * @method Place setReview(\Bordeux\SchemaOrg\Thing\CreativeWork\Review $review ) setReview(\Bordeux\SchemaOrg\Thing\CreativeWork\Review[] $review )A review of the item.
 *
 *
 * -------------------------------- Reviews ---------------------------------------------
 *
 * @property \Bordeux\SchemaOrg\Thing\CreativeWork\Review|\Bordeux\SchemaOrg\Thing\CreativeWork\Review[] reviews
 *
 * @method \Bordeux\SchemaOrg\Thing\CreativeWork\Review|\Bordeux\SchemaOrg\Thing\CreativeWork\Review[] getReviews() Review of the item (legacy spelling; see singular form, review).
 *
 * @method Place setReviews(\Bordeux\SchemaOrg\Thing\CreativeWork\Review $reviews ) setReviews(\Bordeux\SchemaOrg\Thing\CreativeWork\Review[] $reviews )Review of the item (legacy spelling; see singular form, review).
 *
 *
 * -------------------------------- Telephone ---------------------------------------------
 *
 * @property string|string[] telephone
 *
 * @method string|string[] getTelephone() The telephone number.
 *
 * @method Place setTelephone(string $telephone ) setTelephone(string[] $telephone )The telephone number.
 *
 *
 */
 class Place extends \Bordeux\SchemaOrg\Thing {

 }