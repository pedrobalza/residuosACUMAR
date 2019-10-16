<?php


namespace App\Utils;

use Symfony\Component\Serializer\Encoder\JsonEncoder;
use Symfony\Component\Serializer\Normalizer\DateTimeNormalizer;
use Symfony\Component\Serializer\Normalizer\ObjectNormalizer;
use Symfony\Component\Serializer\Serializer;

use Symfony\Component\Serializer\Mapping\Loader\AnnotationLoader;
use Symfony\Component\Serializer\Mapping\Factory\ClassMetadataFactory;
use Doctrine\Common\Annotations\AnnotationReader;

class Encoder
{

    public static function convert($objectToSerialize,$groups = ['default']){
        $classMetadataFactory = new ClassMetadataFactory(
            new AnnotationLoader(new AnnotationReader())
        );

        $encoders = [new JsonEncoder()]; // If no need for XmlEncoder
        $normalizers = [new DateTimeNormalizer(), new ObjectNormalizer($classMetadataFactory)];
        $serializer = new Serializer($normalizers, $encoders);

// Serialize your object in Json
        $jsonObject = $serializer->serialize($objectToSerialize, 'json',
            [
                'groups' => $groups,
                'circular_reference_handler' => function ($object) {
                    return $object->getId();
                }

            ]
        );

// For instance, return a Response with encoded Json
        return $jsonObject;
    }


}