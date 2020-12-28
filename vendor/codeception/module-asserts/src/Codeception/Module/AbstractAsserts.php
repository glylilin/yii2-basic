<?php

namespace Codeception\Module;

use Codeception\Module as CodeceptionModule;
use Codeception\Util\Shared\Asserts as SharedAsserts;

abstract class AbstractAsserts extends CodeceptionModule
{
    use SharedAsserts {
        assertArrayHasKey as public;
        assertArrayNotHasKey as public;
        assertClassHasAttribute as public;
        assertClassHasStaticAttribute as public;
        assertClassNotHasAttribute as public;
        assertClassNotHasStaticAttribute as public;
        assertContains as public;
        assertContainsEquals as public;
        assertContainsOnly as public;
        assertContainsOnlyInstancesOf as public;
        assertCount as public;
        assertDirectoryDoesNotExist as public;
        assertDirectoryExists as public;
        assertDirectoryIsNotReadable as public;
        assertDirectoryIsNotWritable as public;
        assertDirectoryIsReadable as public;
        assertDirectoryIsWritable as public;
        assertDoesNotMatchRegularExpression as public;
        assertEmpty as public;
        assertEquals as public;
        assertEqualsCanonicalizing as public;
        assertEqualsIgnoringCase as public;
        assertEqualsWithDelta as public;
        assertFalse as public;
        assertFileDoesNotExist as public;
        assertFileEquals as public;
        assertFileEqualsCanonicalizing as public;
        assertFileEqualsIgnoringCase as public;
        assertFileExists as public;
        assertFileIsNotReadable as public;
        assertFileIsNotWritable as public;
        assertFileIsReadable as public;
        assertFileIsWritable as public;
        assertFileNotEquals as public;
        assertFileNotEqualsCanonicalizing as public;
        assertFileNotEqualsIgnoringCase as public;
        assertFileNotExists as public;
        assertFinite as public;
        assertGreaterOrEquals as public;
        assertGreaterThan as public;
        assertGreaterThanOrEqual as public;
        assertInfinite as public;
        assertInstanceOf as public;
        assertIsArray as public;
        assertIsBool as public;
        assertIsCallable as public;
        assertIsClosedResource as public;
        assertIsEmpty as public;
        assertIsFloat as public;
        assertIsInt as public;
        assertIsIterable as public;
        assertIsNotArray as public;
        assertIsNotBool as public;
        assertIsNotCallable as public;
        assertIsNotClosedResource as public;
        assertIsNotFloat as public;
        assertIsNotInt as public;
        assertIsNotIterable as public;
        assertIsNotNumeric as public;
        assertIsNotObject as public;
        assertIsNotReadable as public;
        assertIsNotResource as public;
        assertIsNotScalar as public;
        assertIsNotString as public;
        assertIsNotWritable as public;
        assertIsNumeric as public;
        assertIsObject as public;
        assertIsReadable as public;
        assertIsResource as public;
        assertIsScalar as public;
        assertIsString as public;
        assertIsWritable as public;
        assertJson as public;
        assertJsonFileEqualsJsonFile as public;
        assertJsonFileNotEqualsJsonFile as public;
        assertJsonStringEqualsJsonFile as public;
        assertJsonStringEqualsJsonString as public;
        assertJsonStringNotEqualsJsonFile as public;
        assertJsonStringNotEqualsJsonString as public;
        assertLessOrEquals as public;
        assertLessThan as public;
        assertLessThanOrEqual as public;
        assertMatchesRegularExpression as public;
        assertNan as public;
        assertNotContains as public;
        assertNotContainsEquals as public;
        assertNotContainsOnly as public;
        assertNotCount as public;
        assertNotEmpty as public;
        assertNotEquals as public;
        assertNotEqualsCanonicalizing as public;
        assertNotEqualsIgnoringCase as public;
        assertNotEqualsWithDelta as public;
        assertNotFalse as public;
        assertNotInstanceOf as public;
        assertNotNull as public;
        assertNotRegExp as public;
        assertNotSame as public;
        assertNotSameSize as public;
        assertNotTrue as public;
        assertNull as public;
        assertObjectHasAttribute as public;
        assertObjectNotHasAttribute as public;
        assertRegExp as public;
        assertSame as public;
        assertSameSize as public;
        assertStringContainsString as public;
        assertStringContainsStringIgnoringCase as public;
        assertStringEndsNotWith as public;
        assertStringEndsWith as public;
        assertStringEqualsFile as public;
        assertStringEqualsFileCanonicalizing as public;
        assertStringEqualsFileIgnoringCase as public;
        assertStringMatchesFormat as public;
        assertStringMatchesFormatFile as public;
        assertStringNotContainsString as public;
        assertStringNotContainsStringIgnoringCase as public;
        assertStringNotEqualsFile as public;
        assertStringNotEqualsFileCanonicalizing as public;
        assertStringNotEqualsFileIgnoringCase as public;
        assertStringNotMatchesFormat as public;
        assertStringNotMatchesFormatFile as public;
        assertStringStartsNotWith as public;
        assertStringStartsWith as public;
        assertThat as public;
        assertThatItsNot as public;
        assertTrue as public;
        assertXmlFileEqualsXmlFile as public;
        assertXmlFileNotEqualsXmlFile as public;
        assertXmlStringEqualsXmlFile as public;
        assertXmlStringEqualsXmlString as public;
        assertXmlStringNotEqualsXmlFile as public;
        assertXmlStringNotEqualsXmlString as public;
        fail as public;
        markTestIncomplete as public;
        markTestSkipped as public;
    }
}