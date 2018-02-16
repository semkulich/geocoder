<?php

namespace Drupal\geocoder\Plugin\Geocoder\Provider;

use Drupal\geocoder\ProviderUsingHandlerWithAdapterBase;

/**
 * Provides a GooglePlace geocoder provider plugin.
 *
 * @GeocoderProvider(
 *   id = "googleplace",
 *   name = "GooglePlace",
 *   handler = "\Geocoder\Provider\GooglePlace",
 *   arguments = {
 *     "locale" = NULL,
 *     "region" = NULL,
 *     "usessl" = FALSE,
 *     "apikey" = NULL,
 *   }
 * )
 */
class GooglePlace extends ProviderUsingHandlerWithAdapterBase {}
