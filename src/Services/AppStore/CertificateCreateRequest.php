<?php

/**
 * MIT License
 * 
 * Copyright (c) 2023 Long Pham
 * 
 * Permission is hereby granted, free of charge, to any person obtaining a copy
 * of this software and associated documentation files (the "Software"), to deal
 * in the Software without restriction, including without limitation the rights
 * to use, copy, modify, merge, publish, distribute, sublicense, and/or sell
 * copies of the Software, and to permit persons to whom the Software is
 * furnished to do so, subject to the following conditions:
 * 
 * The above copyright notice and this permission notice shall be included in all
 * copies or substantial portions of the Software.
 * 
 * THE SOFTWARE IS PROVIDED "AS IS", WITHOUT WARRANTY OF ANY KIND, EXPRESS OR
 * IMPLIED, INCLUDING BUT NOT LIMITED TO THE WARRANTIES OF MERCHANTABILITY,
 * FITNESS FOR A PARTICULAR PURPOSE AND NONINFRINGEMENT. IN NO EVENT SHALL THE
 * AUTHORS OR COPYRIGHT HOLDERS BE LIABLE FOR ANY CLAIM, DAMAGES OR OTHER
 * LIABILITY, WHETHER IN AN ACTION OF CONTRACT, TORT OR OTHERWISE, ARISING FROM,
 * OUT OF OR IN CONNECTION WITH THE SOFTWARE OR THE USE OR OTHER DEALINGS IN THE
 * SOFTWARE.
*/

namespace Cantie\AppStoreConnect\Services\AppStore;

class CertificateCreateRequest_Data_Attributes extends \Cantie\AppStoreConnect\Model
{
	public $csrContent;
	public $certificateType; // 

	public function getCsrContent()
	{
		return $this->csrContent;
	}
	public function setCsrContent($csrContent)
	{
		$this->csrContent = $csrContent;
		return $this;
	}
	/**
	* @return  string
	*/
	public function getCertificateType()
	{
		return $this->certificateType;
	}
	/**
	* @param  string
	*/
	public function setCertificateType($certificateType)
	{
		$this->certificateType = $certificateType;
		return $this;
	}

}
class_alias(CertificateCreateRequest_Data_Attributes::class, 'AppleService_AppStore_CertificateCreateRequest_Data_Attributes');

class CertificateCreateRequest_Data extends \Cantie\AppStoreConnect\Model
{
	public $type = 'certificates';
	protected $attributesType = CertificateCreateRequest_Data_Attributes::class;
	protected $attributesDataType = 'object';

	public function getType()
	{
		return $this->type;
	}
	public function setType($type)
	{
		$this->type = $type;
		return $this;
	}
	/**
	* @return  CertificateCreateRequest_Data_Attributes
	*/
	public function getAttributes()
	{
		return $this->attributes;
	}
	/**
	* @param  CertificateCreateRequest_Data_Attributes
	*/
	public function setAttributes($attributes)
	{
		$this->attributes = $attributes;
		return $this;
	}

}
class_alias(CertificateCreateRequest_Data::class, 'AppleService_AppStore_CertificateCreateRequest_Data');

class CertificateCreateRequest extends \Cantie\AppStoreConnect\Model
{
	protected $dataType = CertificateCreateRequest_Data::class;
	protected $dataDataType = 'object';

	/**
	* @return  CertificateCreateRequest_Data
	*/
	public function getData()
	{
		return $this->data;
	}
	/**
	* @param  CertificateCreateRequest_Data
	*/
	public function setData($data)
	{
		$this->data = $data;
		return $this;
	}

}
class_alias(CertificateCreateRequest::class, 'AppleService_AppStore_CertificateCreateRequest');

