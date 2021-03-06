<?php

namespace FalkRoeder\DatedNews\Property\TypeConverters;

/***
 *
 * This file is part of the "Dated News" Extension for TYPO3 CMS.
 *
 * It is free software; you can redistribute it and/or modify it under
 * the terms of the GNU General Public License, either version 2
 * of the License, or any later version.
 *
 * For the full copyright and license information, please read the
 * LICENSE.txt file that was distributed with this source code.
 *
 *  (c) 2017
 *
 * Author Falk Röder <mail@falk-roeder.de>
 *
 ***/

use TYPO3\CMS\Extbase\Property\TypeConverter\PersistentObjectConverter;

/**
 * Class ApplicationPersistentObjectConverter.
 */
class ApplicationPersistentObjectConverter extends PersistentObjectConverter
{
    /**
     * @var string
     */
    protected $targetType = 'FalkRoeder\\DatedNews\\Domain\\Model\\Application';

    /**
     * @var int
     */
    protected $priority = 2;

    /**
     * Fetch an object from persistence layer.
     *
     * @param mixed  $identity
     * @param string $targetType
     *
     * @throws \TYPO3\CMS\Extbase\Property\Exception\TargetNotFoundException
     * @throws \TYPO3\CMS\Extbase\Property\Exception\InvalidSourceException
     *
     * @return object
     */
    protected function fetchObjectFromPersistence($identity, $targetType)
    {
        if (ctype_digit((string) $identity)) {
            $query = $this->persistenceManager->createQueryForType($targetType);
            $query->getQuerySettings()
                ->setIgnoreEnableFields(true)
                ->setRespectStoragePage(false)
                ->setRespectSysLanguage(false);
            $constraints = $query->equals('uid', $identity);
            $object = $query->matching($constraints)->execute()->getFirst();
        } else {
            throw new \TYPO3\CMS\Extbase\Property\Exception\InvalidSourceException('The identity property "'.$identity.'" is no UID.', 1297931020);
        }

        if ($object === null) {
            throw new \TYPO3\CMS\Extbase\Property\Exception\TargetNotFoundException('Object with identity "'.print_r($identity, true).'" not found.', 1297933823);
        }

        return $object;
    }
}
