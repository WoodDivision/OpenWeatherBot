<?php

declare(strict_types=1);

namespace App\Controller\OpenWeatherApiService;

use App\Controller\OpenWeatherApiService\Form\OpenWeatherApiServiceForm;
use App\Infrastructure\Helpers\Validator\RequestFormValidationHelper;
use OpenApi\Attributes as OA;
use App\Application\OpenWeatherService\OpenWeatherApiService;
use App\Controller\OpenWeatherApiService\Model\OpenWeatherApiServiceRequestModel;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\JsonResponse;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

class OpenWeatherApiController extends AbstractController
{
    /**
     * @var OpenWeatherApiService
     */
    private OpenWeatherApiService $service;


    public function __construct(OpenWeatherApiService $service)
    {
        $this->service = $service;
    }

    #[OA\Get(
        path: '/weather/{city}',
        description: 'API',
        security: [],
        tags: ['API'],
        parameters: [],
        responses: [
            new OA\Response(response: 200, description: 'OK'),
            new OA\Response(response: 401, description: 'Not Allowed'),
            new OA\Response(response: 500, description: 'Server problem'),
        ]
    ),
        OA\Parameter(
            parameter: 'string',
            name: 'city',
            in: 'path',
            required: true,
            ref: OpenWeatherApiServiceRequestModel::class,
        )
    ]
    #[Route(path: '/weather/{city}', name: 'WeatherAPI', methods: 'GET')]
    public function __invoke(Request $request): Response
    {
        try {
            $model = new OpenWeatherApiServiceRequestModel();
            $form = $this->createForm(OpenWeatherApiServiceForm::class, $model)
                ->submit($request->attributes->get('city'));
            RequestFormValidationHelper::validate($form);

            file_put_contents(
                'weatherAPI.json',
                $this->service->getOpenWeatherAPI($model->city)
            );
        } catch (\Exception $e) {
            return new JsonResponse('fail');
        }
        return new JsonResponse('done');
    }
}
