<?php

/**
 * SEO Helper — Genera JSON-LD estructurado para Cycloid Talent.
 */

function seo_organization_jsonld(): string
{
    $data = [
        '@context'    => 'https://schema.org',
        '@type'       => ['Organization', 'LocalBusiness'],
        'name'        => 'Cycloid Talent SAS',
        'url'         => base_url('/'),
        'logo'        => base_url('assets/img/logos/cycloid-logo-azul.png'),
        'description' => 'Consultoría en Seguridad y Salud en el Trabajo (SST), Baterías de Riesgo Psicosocial y servicios especializados para empresas en Colombia.',
        'telephone'   => '+573229074371',
        'email'       => 'diana.cuestas@cycloidtalent.com',
        'taxID'       => '901653912-2',
        'address'     => [
            '@type'           => 'PostalAddress',
            'streetAddress'   => 'Calle 13 # 31-106',
            'addressLocality' => 'Soacha',
            'addressRegion'   => 'Cundinamarca',
            'postalCode'      => '250051',
            'addressCountry'  => 'CO',
        ],
        'areaServed'  => [
            '@type' => 'Country',
            'name'  => 'Colombia',
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
