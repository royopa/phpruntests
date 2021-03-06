<?php
/**
 * Autoload Class Map
 *
 * This is a generated file. Do not edit!
 *
 * To re-generate this file, run the script BuildClassMap.php.
 */
$rtClassMap = array(
    'rtIfParallelHasPcntl'                     => 'configuration/preconditions/rtIfParallelHasPcntl.php',
    'rtIsExecutableSet'                        => 'configuration/preconditions/rtIsExecutableSet.php',
    'rtIsPcreLoaded'                           => 'configuration/preconditions/rtIsPcreLoaded.php',
    'rtIsPhpVersionCorrect'                    => 'configuration/preconditions/rtIsPhpVersionCorrect.php',
    'rtIsProcOpenAvailable'                    => 'configuration/preconditions/rtIsProcOpenAvailable.php',
    'rtIsSafeModeDisabled'                     => 'configuration/preconditions/rtIsSafeModeDisabled.php',
    'rtIsTestFileSpecified'                    => 'configuration/preconditions/rtIsTestFileSpecified.php',
    'rtIsValgrindAvailable'                    => 'configuration/preconditions/rtIsValgrindAvailable.php',
    'rtAddToCommandLine'                       => 'configuration/rtAddToCommandLine.php',
    'rtCommandLineOptions'                     => 'configuration/rtCommandLineOptions.php',
    'rtEnvironmentVariables'                   => 'configuration/rtEnvironmentVariables.php',
    'rtIniAsCommandLineArgs'                   => 'configuration/rtIniAsCommandLineArgs.php',
    'rtMemoryTool'                             => 'configuration/rtMemoryTool.php',
    'rtPreCondition'                           => 'configuration/rtPreCondition.php',
    'rtPreConditionList'                       => 'configuration/rtPreConditionList.php',
    'rtRuntestsConfiguration'                  => 'configuration/rtRuntestsConfiguration.php',
    'rtSetting'                                => 'configuration/rtSetting.php',
    'rtCurrentDirectorySetting'                => 'configuration/settings/rtCurrentDirectorySetting.php',
    'rtLogFormatSetting'                       => 'configuration/settings/rtLogFormatSetting.php',
    'rtPhpCgiExecutableSetting'                => 'configuration/settings/rtPhpCgiExecutableSetting.php',
    'rtPhpCommandLineArgSetting'               => 'configuration/settings/rtPhpCommandLineArgSetting.php',
    'rtPhpExecutableSetting'                   => 'configuration/settings/rtPhpExecutableSetting.php',
    'rtTestDirectorySetting'                   => 'configuration/settings/rtTestDirectorySetting.php',
    'rtTestFileSetting'                        => 'configuration/settings/rtTestFileSetting.php',
    'rtWorkingDirectorySetting'                => 'configuration/settings/rtWorkingDirectorySetting.php',
    'rtValgrind'                               => 'configuration/tools/rtValgrind.php',
    'rtUnixConfiguration'                      => 'configuration/unix/rtUnixConfiguration.php',
    'rtUnixEnvironmentVariables'               => 'configuration/unix/rtUnixEnvironmentVariables.php',
    'rtUnixPreConditionList'                   => 'configuration/unix/rtUnixPreConditionList.php',
    'rtWinConfiguration'                       => 'configuration/windows/rtWinConfiguration.php',
    'rtWinEnvironmentVariables'                => 'configuration/windows/rtWinEnvironmentVariables.php',
    'rtWinPreConditionList'                    => 'configuration/windows/rtWinPreConditionList.php',
    'rtAutoload'                               => 'rtAutoload.php',
    'rtClassMap'                               => 'rtClassMap.php',
    'rtDirectoryList'                          => 'rtDirectoryList.php',
    'rtException'                              => 'rtException.php',
    'rtPhptFilterIterator'                     => 'rtPhptFilterIterator.php',
    'rtText'                                   => 'rtText.php',
    'rtUtil'                                   => 'rtUtil.php',
    'rtTask'                                   => 'taskScheduler/rtTask.php',
    'rtTaskInterface'                          => 'taskScheduler/rtTaskInterface.php',
    'rtTaskScheduler'                          => 'taskScheduler/rtTaskScheduler.php',
    'rtTaskSchedulerFile'                      => 'taskScheduler/rtTaskSchedulerFile.php',
    'rtTaskSchedulerMsgQ'                      => 'taskScheduler/rtTaskSchedulerMsgQ.php',
    'rtTaskTestGroup'                          => 'taskScheduler/rtTaskTestGroup.php',
    'rtTestOutputWriterCSV'                    => 'testcase/output/rtTestOutputWriterCSV.php',
    'rtTestOutputWriterHTML'                   => 'testcase/output/rtTestOutputWriterHTML.php',
    'rtTestOutputWriterList'                   => 'testcase/output/rtTestOutputWriterList.php',
    'rtTestOutputWriterXML'                    => 'testcase/output/rtTestOutputWriterXML.php',
    'rtHasMandatorySections'                   => 'testcase/preconditions/rtHasMandatorySections.php',
    'rtHasNoDuplicateSections'                 => 'testcase/preconditions/rtHasNoDuplicateSections.php',
    'rtHasNoEmptySections'                     => 'testcase/preconditions/rtHasNoEmptySections.php',
    'rtIsNotRedirected'                        => 'testcase/preconditions/rtIsNotRedirected.php',
    'rtIsSectionImplemented'                   => 'testcase/preconditions/rtIsSectionImplemented.php',
    'rtIsValidSectionName'                     => 'testcase/preconditions/rtIsValidSectionName.php',
    'rtPhpRunner'                              => 'testcase/rtPhpRunner.php',
    'rtPhpTest'                                => 'testcase/rtPhpTest.php',
    'rtPhpTestFile'                            => 'testcase/rtPhpTestFile.php',
    'rtTestConfiguration'                      => 'testcase/rtTestConfiguration.php',
    'rtTestDifference'                         => 'testcase/rtTestDifference.php',
    'rtTestOutputWriter'                       => 'testcase/rtTestOutputWriter.php',
    'rtTestPreCondition'                       => 'testcase/rtTestPreCondition.php',
    'rtTestResults'                            => 'testcase/rtTestResults.php',
    'rtTestStatus'                             => 'testcase/rtTestStatus.php',
    'rtArgsSection'                            => 'testcase/sections/configurationsections/rtArgsSection.php',
    'rtCookieSection'                          => 'testcase/sections/configurationsections/rtCookieSection.php',
    'rtDeflatePostSection'                     => 'testcase/sections/configurationsections/rtDeflatePostSection.php',
    'rtEnvSection'                             => 'testcase/sections/configurationsections/rtEnvSection.php',
    'rtGetSection'                             => 'testcase/sections/configurationsections/rtGetSection.php',
    'rtGzipPostSection'                        => 'testcase/sections/configurationsections/rtGzipPostSection.php',
    'rtIniSection'                             => 'testcase/sections/configurationsections/rtIniSection.php',
    'rtPostRawSection'                         => 'testcase/sections/configurationsections/rtPostRawSection.php',
    'rtPostSection'                            => 'testcase/sections/configurationsections/rtPostSection.php',
    'rtRedirectSection'                        => 'testcase/sections/configurationsections/rtRedirectSection.php',
    'rtStdinSection'                           => 'testcase/sections/configurationsections/rtStdinSection.php',
    'rtCleanSection'                           => 'testcase/sections/executablesections/rtCleanSection.php',
    'rtFileExternalSection'                    => 'testcase/sections/executablesections/rtFileExternalSection.php',
    'rtFileSection'                            => 'testcase/sections/executablesections/rtFileSection.php',
    'rtSkipIfSection'                          => 'testcase/sections/executablesections/rtSkipIfSection.php',
    'rtCreditsSection'                         => 'testcase/sections/informationsections/rtCreditsSection.php',
    'rtDescriptionSection'                     => 'testcase/sections/informationsections/rtDescriptionSection.php',
    'rtTestHeaderSection'                      => 'testcase/sections/informationsections/rtTestHeaderSection.php',
    'rtXfailSection'                           => 'testcase/sections/informationsections/rtXfailSection.php',
    'rtExpectFSection'                         => 'testcase/sections/outputsections/rtExpectFSection.php',
    'rtExpectHeadersSection'                   => 'testcase/sections/outputsections/rtExpectHeadersSection.php',
    'rtExpectRegexSection'                     => 'testcase/sections/outputsections/rtExpectRegexSection.php',
    'rtExpectSection'                          => 'testcase/sections/outputsections/rtExpectSection.php',
    'rtConfigurationSection'                   => 'testcase/sections/rtConfigurationSection.php',
    'rtExecutableSection'                      => 'testcase/sections/rtExecutableSection.php',
    'rtInformationSection'                     => 'testcase/sections/rtInformationSection.php',
    'rtOutputSection'                          => 'testcase/sections/rtOutputSection.php',
    'rtSection'                                => 'testcase/sections/rtSection.php',
    'rtGroupConfiguration'                     => 'testgroup/rtGroupConfiguration.php',
    'rtGroupResults'                           => 'testgroup/rtGroupResults.php',
    'rtPhpTestGroup'                           => 'testgroup/rtPhpTestGroup.php',
    'rtPhpTestRun'                             => 'testrun/rtPhpTestRun.php',
);
?>
