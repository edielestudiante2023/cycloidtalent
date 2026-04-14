<?php

/**
 * SEO Helper — Genera JSON-LD estructurado para Cycloid Talent.
 */

function seo_organization_jsonld(): string
{
    $data = [
        '@context'    => 'https://schema.org',
        '@type'       => ['Organization', 'LocalBusiness', 'ProfessionalService'],
        '@id'         => base_url('/') . '#organization',
        'name'        => 'Cycloid Talent S.A.S.',
        'alternateName' => 'Cycloid Talent',
        'legalName'   => 'Cycloid Talent S.A.S.',
        'url'         => base_url('/'),
        'logo'        => [
            '@type'  => 'ImageObject',
            'url'    => base_url('assets/img/icons/icon-192x192.png'),
            'width'  => 192,
            'height' => 192,
        ],
        'image'       => base_url('assets/img/logos/cycloid-logo-azul.png'),
        'description' => 'Consultoría especializada en Seguridad y Salud en el Trabajo (SG-SST) y Batería de Riesgo Psicosocial en Colombia. Atendemos empresas, propiedad horizontal y locales comerciales conforme al Decreto 1072 y Resolución 2646.',
        'slogan'      => 'Sistemas que evolucionan',
        'foundingDate' => '2020',
        'taxID'       => '901.653.912-2',
        'vatID'       => '901653912-2',
        'telephone'   => '+57 322 907 4371',
        'email'       => 'notificacion.cycloidtalent@cycloidtalent.com',
        'address'     => [
            '@type'           => 'PostalAddress',
            'streetAddress'   => 'Transversal 24B #17-209, Conjunto Residencial Sandalo, Oficina 202',
            'addressLocality' => 'Soacha',
            'addressRegion'   => 'Cundinamarca',
            'postalCode'      => '250051',
            'addressCountry'  => 'CO',
        ],
        'geo' => [
            '@type'     => 'GeoCoordinates',
            'latitude'  => 4.5814,
            'longitude' => -74.2170,
        ],
        'areaServed'  => [
            [
                '@type' => 'Country',
                'name'  => 'Colombia',
            ],
            [
                '@type' => 'AdministrativeArea',
                'name'  => 'Cundinamarca',
            ],
            [
                '@type' => 'City',
                'name'  => 'Bogotá',
            ],
            [
                '@type' => 'City',
                'name'  => 'Soacha',
            ],
        ],
        'openingHoursSpecification' => [
            [
                '@type'     => 'OpeningHoursSpecification',
                'dayOfWeek' => ['Monday', 'Tuesday', 'Wednesday', 'Thursday', 'Friday'],
                'opens'     => '08:00',
                'closes'    => '17:00',
            ],
        ],
        'priceRange' => '$$',
        'hasOfferCatalog' => [
            '@type' => 'OfferCatalog',
            'name'  => 'Servicios Cycloid Talent',
            'itemListElement' => [
                [
                    '@type' => 'Offer',
                    'itemOffered' => [
                        '@type' => 'Service',
                        'name'  => 'Consultoría en SG-SST',
                        'url'   => base_url('servicios/consultoria-sst'),
                    ],
                ],
                [
                    '@type' => 'Offer',
                    'itemOffered' => [
                        '@type' => 'Service',
                        'name'  => 'Batería de Riesgo Psicosocial',
                        'url'   => base_url('servicios/riesgo-psicosocial'),
                    ],
                ],
                [
                    '@type' => 'Offer',
                    'itemOffered' => [
                        '@type' => 'Service',
                        'name'  => 'SST en Propiedad Horizontal',
                        'url'   => base_url('servicios/propiedad-horizontal'),
                    ],
                ],
            ],
        ],
        'contactPoint' => [
            '@type'             => 'ContactPoint',
            'telephone'         => '+57 322 907 4371',
            'contactType'       => 'customer service',
            'areaServed'        => 'CO',
            'availableLanguage' => ['Spanish', 'es'],
            'email'             => 'notificacion.cycloidtalent@cycloidtalent.com',
        ],
        'sameAs' => [
            'https://www.facebook.com/CycloidTalent',
            'https://co.linkedin.com/company/cycloid-talent',
            'https://www.instagram.com/cycloid_talent',
            'https://www.tiktok.com/@cycloid_talent',
        ],
    ];

    return json_encode($data, JSON_UNESCAPED_SLASHES | JSON_UNESCAPED_UNICODE);
}

function seo_service_jsonld(string $name, string $description, string $url): string
{
    $data = [
        '@context'    => 'https://schema.org',
        '@type'       => 'Service',
        'name'        => $name,
        'description' => $description,
        'url'         => $url,
        'provider'    => [
            '@type' => 'Organization',
            'name'  => 'Cycloid Talent SAS',
            'url'   => base_url('/'),
        ],
        'areaServed'  => [
            '@type' => 'Country',
            'name'  => 'Colombia',
        ],
        'serviceType' => $name,
    ];

    return json_encode($data, JSON_UNESCAPED_SLASHES | JSON_UNESCAPED_UNICODE);
}

function seo_article_jsonld(array $meta): string
{
    $data = [
        '@context'        => 'https://schema.org',
        '@type'           => 'Article',
        'headline'        => $meta['titulo'],
        'description'     => $meta['extracto'],
        'datePublished'   => $meta['fecha'],
        'image'           => base_url($meta['imagen']),
        'url'             => base_url('blog/' . $meta['slug']),
        'mainEntityOfPage'=> base_url('blog/' . $meta['slug']),
        'author'          => [
            '@type' => 'Organization',
            'name'  => 'Cycloid Talent SAS',
            'url'   => base_url('/'),
        ],
        'publisher'       => [
            '@type' => 'Organization',
            'name'  => 'Cycloid Talent SAS',
            'logo'  => [
                '@type' => 'ImageObject',
                'url'   => base_url('assets/img/logos/cycloid-logo-azul.png'),
            ],
        ],
    ];

    return json_encode($data, JSON_UNESCAPED_SLASHES | JSON_UNESCAPED_UNICODE);
}

function seo_breadcrumb_jsonld(array $items): string
{
    $list = [];
    foreach ($items as $i => $item) {
        $list[] = [
            '@type'    => 'ListItem',
            'position' => $i + 1,
            'name'     => $item[0],
            'item'     => $item[1],
        ];
    }

    $data = [
        '@context'        => 'https://schema.org',
        '@type'           => 'BreadcrumbList',
        'itemListElement' => $list,
    ];

    return json_encode($data, JSON_UNESCAPED_SLASHES | JSON_UNESCAPED_UNICODE);
}

/**
 * JSON-LD de FAQPage para rich snippets de preguntas frecuentes.
 * @param array $faqs Lista de ['q' => pregunta, 'a' => respuesta]
 */
function seo_faq_jsonld(array $faqs): string
{
    $mainEntity = array_map(fn($faq) => [
        '@type' => 'Question',
        'name'  => $faq['q'],
        'acceptedAnswer' => [
            '@type' => 'Answer',
            'text'  => $faq['a'],
        ],
    ], $faqs);

    return json_encode([
        '@context'   => 'https://schema.org',
        '@type'      => 'FAQPage',
        'mainEntity' => $mainEntity,
    ], JSON_UNESCAPED_SLASHES | JSON_UNESCAPED_UNICODE);
}

/**
 * Combina múltiples JSON-LD en un @graph.
 */
function seo_graph_jsonld(array $jsonlds): string
{
    $items = array_map(fn($j) => json_decode($j, true), $jsonlds);

    // Quitar @context individual, poner uno global
    foreach ($items as &$item) {
        unset($item['@context']);
    }

    $data = [
        '@context' => 'https://schema.org',
        '@graph'   => $items,
    ];

    return json_encode($data, JSON_UNESCAPED_SLASHES | JSON_UNESCAPED_UNICODE);
}
