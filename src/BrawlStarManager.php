<?php


namespace AxayGadekar\Brawlstars;


use AxayGadekar\Brawlstars\Exceptions\ConfigurationException;
use Exception;
use Illuminate\Http\Client\PendingRequest;
use Illuminate\Http\JsonResponse;
use Illuminate\Support\Facades\Http;

class BrawlStarManager
{

    /**
     * @var string $version
     */
    private string $version;

    /**
     * @var PendingRequest $pendingRequest
     */
    private PendingRequest $pendingRequest;


    /**
     * BrawlStarManager constructor.
     * @throws ConfigurationException
     */
    public function __construct()
    {

        $this->version = config('brawlstars.version');
        $accessKey = config('brawlstars.credentials.v1.access_key');

        if (!$accessKey) {
            throw new ConfigurationException('Credentials are required to create a Http client');
        }

        $this->pendingRequest = Http::asJson()->withHeaders([
            'Accept' => 'application/json',
            'authorization' => "Bearer $accessKey"
        ]);

    }

    /**
     * list brawlers
     *
     * @return JsonResponse
     */
    public function brawlers()
    {
        try {

            $response = $this->pendingRequest->get($this->url('brawlers'));
            return $this->response(json_decode($response));

        } catch (Exception $exception) {

            return $this->response($exception->getMessage(), $exception->getCode(), false);

        }
    }

    /**
     * Getting BrawlStarManager Url
     *
     * @param string $uri
     * @param array|null $query
     * @return string
     */
    public function url(string $uri, array $query = null)
    {
        return 'https://api.brawlstars.com/' . $this->version . "/" . $uri . '?' . http_build_query($query ? $query : array());
    }

    /**
     * Response generator
     *
     * @param $data
     * @param int $code
     * @param bool $status
     * @return JsonResponse
     */
    public function response($data, int $code = JsonResponse::HTTP_OK, bool $status = true)
    {
        return response()->json([
            'status' => $status,
            'code' => $code,
            'data' => $data
        ]);
    }


}
