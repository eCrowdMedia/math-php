<?php
namespace MathPHP\Tests\Probability\Distribution\Continuous;

use MathPHP\Probability\Distribution\Continuous;

class LimitsTest extends \PHPUnit_Framework_TestCase
{
    /**
     * Limits should look like:
     *  (a,b)
     *  [a,b)
     *  (a,b]
     *  [a,b]
     */
    private function limitTest($limits)
    {
        foreach ($limits as $parameter => $limit) {
            $this->assertRegExp('/^ ([[(]) (.+) , (.+?) ([])]) $/x', $limit);
        }
    }

    /**
     * @testCase Limits constant is correct format
     */
    public function testBetaParameterLimits()
    {
        $this->limitTest(Continuous\Beta::PARAMETER_LIMITS);
    }

    /**
     * @testCase Limits constant is correct format
     */
    public function testBetaSupportLimits()
    {
        $this->limitTest(Continuous\Beta::SUPPORT_LIMITS);
    }

    /**
     * @testCase Limits constant is correct format
     */
    public function testCauchyParameterLimits()
    {
        $this->limitTest(Continuous\Cauchy::PARAMETER_LIMITS);
    }

    /**
     * @testCase Limits constant is correct format
     */
    public function testCauchySupportLimits()
    {
        $this->limitTest(Continuous\Cauchy::SUPPORT_LIMITS);
    }

    /**
     * @testCase Limits constant is correct format
     */
    public function testChiSquaredParameterLimits()
    {
        $this->limitTest(Continuous\ChiSquared::PARAMETER_LIMITS);
    }

    /**
     * @testCase Limits constant is correct format
     */
    public function testChiSquaredSupportLimits()
    {
        $this->limitTest(Continuous\ChiSquared::SUPPORT_LIMITS);
    }

    /**
     * @testCase Limits constant is correct format
     */
    public function testExponentialParameterLimits()
    {
        $this->limitTest(Continuous\Exponential::SUPPORT_LIMITS);
    }

    /**
     * @testCase Limits constant is correct format
     */
    public function testExponentialSupportLimits()
    {
        $this->limitTest(Continuous\Exponential::PARAMETER_LIMITS);
    }

    /**
     * @testCase Limits constant is correct format
     */
    public function testFParameterLimits()
    {
        $this->limitTest(Continuous\F::PARAMETER_LIMITS);
    }

    /**
     * @testCase Limits constant is correct format
     */
    public function testFSupportLimits()
    {
        $this->limitTest(Continuous\F::SUPPORT_LIMITS);
    }

    /**
     * @testCase Limits constant is correct format
     */
    public function testGammaParameterLimits()
    {
        $this->limitTest(Continuous\Gamma::PARAMETER_LIMITS);
    }

    /**
     * @testCase Limits constant is correct format
     */
    public function testGammaSupportLimits()
    {
        $this->limitTest(Continuous\Gamma::SUPPORT_LIMITS);
    }

    /**
     * @testCase Limits constant is correct format
     */
    public function testLaplaceParameterLimits()
    {
        $this->limitTest(Continuous\Laplace::PARAMETER_LIMITS);
    }

    /**
     * @testCase Limits constant is correct format
     */
    public function testLaplaceSupportLimits()
    {
        $this->limitTest(Continuous\Laplace::SUPPORT_LIMITS);
    }

    /**
     * @testCase Limits constant is correct format
     */
    public function testLogisticParameterLimits()
    {
        $this->limitTest(Continuous\Logistic::PARAMETER_LIMITS);
    }

    /**
     * @testCase Limits constant is correct format
     */
    public function testLogisticSupportLimits()
    {
        $this->limitTest(Continuous\Logistic::SUPPORT_LIMITS);
    }

    /**
     * @testCase Limits constant is correct format
     */
    public function testLogLogisticParameterLimits()
    {
        $this->limitTest(Continuous\LogLogistic::PARAMETER_LIMITS);
    }

    /**
     * @testCase Limits constant is correct format
     */
    public function testLogLogisticSupportLimits()
    {
        $this->limitTest(Continuous\LogLogistic::SUPPORT_LIMITS);
    }

    /**
     * @testCase Limits constant is correct format
     */
    public function testLogNormalParameterLimits()
    {
        $this->limitTest(Continuous\LogNormal::PARAMETER_LIMITS);
    }

    /**
     * @testCase Limits constant is correct format
     */
    public function testLogNormalSupportLimits()
    {
        $this->limitTest(Continuous\LogNormal::SUPPORT_LIMITS);
    }

    /**
     * @testCase Limits constant is correct format
     */
    public function testNormalParameterLimits()
    {
        $this->limitTest(Continuous\Normal::PARAMETER_LIMITS);
    }

    /**
     * @testCase Limits constant is correct format
     */
    public function testNormalSupportLimits()
    {
        $this->limitTest(Continuous\Normal::SUPPORT_LIMITS);
    }

    /**
     * @testCase Limits constant is correct format
     */
    public function testParetoParameterLimits()
    {
        $this->limitTest(Continuous\Pareto::LIMITS);
    }

    /**
     * @testCase Limits constant is correct format
     */
    public function testStandardNormalParameterLimits()
    {
        $this->limitTest(Continuous\StandardNormal::PARAMETER_LIMITS);
    }

    /**
     * @testCase Limits constant is correct format
     */
    public function testStandardNormalSupportLimits()
    {
        $this->limitTest(Continuous\StandardNormal::SUPPORT_LIMITS);
    }

    /**
     * @testCase Limits constant is correct format
     */
    public function testStudentTParameterLimits()
    {
        $this->limitTest(Continuous\StudentT::PARAMETER_LIMITS);
    }

    /**
     * @testCase Limits constant is correct format
     */
    public function testStudentTSupportLimits()
    {
        $this->limitTest(Continuous\StudentT::SUPPORT_LIMITS);
    }

    /**
     * @testCase Limits constant is correct format
     */
    public function testUniformParameterLimits()
    {
        $this->limitTest(Continuous\Uniform::PARAMETER_LIMITS);
    }

    /**
     * @testCase Limits constant is correct format
     */
    public function testUniformParameterLimits()
    {
        $this->limitTest(Continuous\Uniform::SUPPORT_LIMITS);
    }

    /**
     * @testCase Limits constant is correct format
     */
    public function testWeibullParameterLimits()
    {
        $this->limitTest(Continuous\Weibull::PARAMETER_LIMITS);
    }

    /**
     * @testCase Limits constant is correct format
     */
    public function testWeibullSupportLimits()
    {
        $this->limitTest(Continuous\Weibull::SUPPORT_LIMITS);
    }
}
