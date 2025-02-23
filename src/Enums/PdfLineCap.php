<?php

/*
 * This file is part of the 'fpdf' package.
 *
 * For the license information, please view the LICENSE
 * file that was distributed with this source code.
 *
 * @author bibi.nu <bibi@bibi.nu>
 */

declare(strict_types=1);

namespace fpdf\Enums;

use Elao\Enum\Attribute\EnumCase;
use fpdf\Interfaces\PdfEnumDefaultInterface;
use fpdf\Traits\PdfEnumDefaultTrait;

/**
 * The PDF line cap enumeration.
 *
 * The line cap style specifies the shape to be used at the ends of open sub-paths (and dashes, if any) when they
 * are stroked.
 *
 * @implements PdfEnumDefaultInterface<PdfLineCap>
 */
enum PdfLineCap: int implements PdfEnumDefaultInterface
{
    use PdfEnumDefaultTrait;

    /**
     * Butt cap.
     *
     * The stroke is squared off at the endpoint of the path. There is no projection beyond the end of the path.
     */
    case BUTT = 0;

    /**
     * Round cap.
     *
     * A semicircular arc with a diameter equal to the line width is drawn around the endpoint and filled in.
     */
    case ROUND = 1;

    /**
     * Projecting square cap (default value).
     *
     * The stroke continues beyond the endpoint of the path for a distance equal to half the line width and is
     * squared off.
     */
    #[EnumCase(extras: [self::NAME => true])]
    case SQUARE = 2;
}
